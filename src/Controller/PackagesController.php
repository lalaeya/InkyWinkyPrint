<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class PackagesController extends AppController
{
    /**
     * Packages Controller
     *
     * @property \App\Model\Table\PackagesTable $Packages
     */

    public function index()
    {
        $query = $this->Packages->find()
            ->contain(['Cuses', 'PackageColours', 'PackageCovers']);
        $packages = $this->paginate($query);

        $this->set(compact('packages'));
    }

    public function view($id = null)
    {
        $package = $this->Packages->get($id, contain: ['Cuses', 'PackageColours', 'PackageCovers']);
        $this->set(compact('package'));
    }

public function add()
{
    $package = $this->Packages->newEmptyEntity();
    $cusId = $this->request->getQuery('cus_id');

    if ($cusId) {
        $package->cus_id = $cusId;
    }

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        // Handle file upload
        if (!empty($data['package_file']) && $data['package_file']->getError() === UPLOAD_ERR_OK) {
            $uploadedFile = $data['package_file'];
            $filename = time() . '_' . $uploadedFile->getClientFilename();
            $targetPath = WWW_ROOT . 'uploads' . DS . $filename;

            if (!file_exists(WWW_ROOT . 'uploads')) {
                mkdir(WWW_ROOT . 'uploads', 0775, true);
            }

            $uploadedFile->moveTo($targetPath);
            $data['package_file'] = $filename;
        } else {
            $data['package_file'] = null;
        }

        $package = $this->Packages->patchEntity($package, $data);

        if ($this->Packages->save($package)) {
            $this->Flash->success(('Package has been saved.'));
            return $this->redirect(['action' => 'view', $package->package_id]);
        }

        $this->Flash->error(('The package could not be saved. Please, try again.'));
    }

    // REMOVE this since we’re not showing customer dropdown
    // $cuses = $this->Packages->Cuses->find('list', ['limit' => 200])->all();
    $packageColours = $this->Packages->PackageColours->find('list', ['limit' => 200])->all();
    $packageCovers = $this->Packages->PackageCovers->find('list', ['limit' => 200])->all();

    $this->set(compact('package', 'packageColours', 'packageCovers', 'cusId'));
}

public function beforeFilter(\Cake\Event\EventInterface $event)
{
    parent::beforeFilter($event);
    
    if (!$this->request->getSession()->read('Admin') && $this->request->getParam('action') !== 'login') {
        return $this->redirect(['controller' => 'Admins', 'action' => 'login']);
    }
}


public function edit($id = null)
{
    $package = $this->Packages->get($id, ['contain' => []]);
    
    if ($this->request->is(['patch', 'post', 'put'])) {
        $data = $this->request->getData();

        // Semak jika ada fail dimuat naik
        $file = $data['package_file'];

        if ($file && $file->getError() === 0) {
            $filename = time() . '-' . $file->getClientFilename();
            $targetPath = WWW_ROOT . 'img' . DS . $filename;
            $file->moveTo($targetPath);

            $data['package_file'] = $filename;
        } else {
            // Kalau tiada fail baru, kekalkan fail lama
            unset($data['package_file']);
        }

        $package = $this->Packages->patchEntity($package, $data);

        if ($this->Packages->save($package)) {
            $this->Flash->success(__('The package has been saved.'));
            return $this->redirect(['action' => 'view', $package->package_id]);

        }

        $this->Flash->error(__('The package could not be saved. Please, try again.'));
    }

    $packageColours = $this->Packages->PackageColours->find('list', ['limit' => 200])->all();
    $packageCovers = $this->Packages->PackageCovers->find('list', ['limit' => 200])->all();

    $this->set(compact('package', 'packageColours', 'packageCovers'));
}


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $package = $this->Packages->get($id);
        if ($this->Packages->delete($package)) {
            $this->Flash->success(('The package has been deleted.'));
        } else {
            $this->Flash->error(('The package could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



public function sendEmail($packageId = null)
{
    // Dapatkan package dan sekali dengan customer
    $package = $this->Packages->get($packageId, [
        'contain' => ['Cuses'] // kalau kau guna 'Customers', tukar sini jugak
    ]);

    $customer = $package->cus;

$email = new Mailer('default');
$email->setFrom(['company@example.com' => 'InkyWinky Printing'])
    ->setTo($customer->cus_email)
    ->setSubject('Your Order Confirmation at InkyWinky Printing')
    ->deliver("Hi {$customer->cus_fname}, 👋

Thank you for placing your order with InkyWinky Printing! We're excited to help you bring your ideas to life.

🆔 Order ID: {$package->package_id}

📦 Your order will be ready for pick-up at our store:
📍 Location: Resak Apartment, Persiaran Pulau Angsa, Perdana Heights, 40150 Shah Alam, Selangor
📅 Date: {$package->pickup_date}
⏰ Time: {$package->pickup_time}

If you have any questions or changes, feel free to contact us via WhatsApp at 018-2878920 or email us at inkywinky.printing@gmail.com.

We look forward to seeing you!

Best regards,  
The InkyWinky Team 🎨");


    $this->Flash->success('Email has been sent.');
    return $this->redirect(['action' => 'view', $packageId]);
}

}