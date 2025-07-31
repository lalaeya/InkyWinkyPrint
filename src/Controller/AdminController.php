<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 */
class AdminController extends AppController
{


public function login()
{
    if ($this->request->is('post')) {
        $email = $this->request->getData('admin_email');
        $password = $this->request->getData('password');

        // Check hardcoded credentials
        if ($email === 'inkywinkyhq@gmail.com' && $password === '1313') {
            $this->request->getSession()->write('Admin', [
                'email' => $email
            ]);
            return $this->redirect(['controller' => 'dashboard', 'action' => 'index']);
        } else {
            $this->Flash->error('Invalid login credentials');
        }
    }
}





public function logout()
{
    $session = $this->request->getSession();
    $session->delete('Admin');
    $this->Flash->success('You have been logged out.');
    return $this->redirect(['action' => 'login']);
}


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Admin->find()
            ->contain(['Orders', 'PackageColours', 'PackageCovers']);
        $admin = $this->paginate($query);

        $this->set(compact('admin'));
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admin->get($id, contain: ['Orders', 'PackageColours', 'PackageCovers']);
        $this->set(compact('admin'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEmptyEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $orders = $this->Admin->Orders->find('list', limit: 200)->all();
        $packageColours = $this->Admin->PackageColours->find('list', limit: 200)->all();
        $packageCovers = $this->Admin->PackageCovers->find('list', limit: 200)->all();
               $this->set(compact('admin', 'orders', 'packageColours', 'packageCovers'));
   

        
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admin->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->getData());
            if ($this->Admin->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The admin could not be saved. Please, try again.'));
        }
        $orders = $this->Admin->Orders->find('list', limit: 200)->all();
        $packageColours = $this->Admin->PackageColours->find('list', limit: 200)->all();
        $packageCovers = $this->Admin->PackageCovers->find('list', limit: 200)->all();
         $this->set(compact('admin', 'orders', 'packageColours', 'packageCovers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admin->get($id);
        if ($this->Admin->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
