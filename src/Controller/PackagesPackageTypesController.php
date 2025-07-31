<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackagesPackageTypes Controller
 *
 * @property \App\Model\Table\PackagesPackageTypesTable $PackagesPackageTypes
 */
class PackagesPackageTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PackagesPackageTypes->find()
            ->contain(['Packages', 'PackageTypes']);
        $packagesPackageTypes = $this->paginate($query);

        $this->set(compact('packagesPackageTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Packages Package Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packagesPackageType = $this->PackagesPackageTypes->get($id, contain: ['Packages', 'PackageTypes']);
        $this->set(compact('packagesPackageType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packagesPackageType = $this->PackagesPackageTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $packagesPackageType = $this->PackagesPackageTypes->patchEntity($packagesPackageType, $this->request->getData());
            if ($this->PackagesPackageTypes->save($packagesPackageType)) {
                $this->Flash->success(__('The packages package type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packages package type could not be saved. Please, try again.'));
        }
        $packages = $this->PackagesPackageTypes->Packages->find('list', limit: 200)->all();
        $packageTypes = $this->PackagesPackageTypes->PackageTypes->find('list', limit: 200)->all();
        $this->set(compact('packagesPackageType', 'packages', 'packageTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Packages Package Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packagesPackageType = $this->PackagesPackageTypes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packagesPackageType = $this->PackagesPackageTypes->patchEntity($packagesPackageType, $this->request->getData());
            if ($this->PackagesPackageTypes->save($packagesPackageType)) {
                $this->Flash->success(__('The packages package type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The packages package type could not be saved. Please, try again.'));
        }
        $packages = $this->PackagesPackageTypes->Packages->find('list', limit: 200)->all();
        $packageTypes = $this->PackagesPackageTypes->PackageTypes->find('list', limit: 200)->all();
        $this->set(compact('packagesPackageType', 'packages', 'packageTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Packages Package Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packagesPackageType = $this->PackagesPackageTypes->get($id);
        if ($this->PackagesPackageTypes->delete($packagesPackageType)) {
            $this->Flash->success(__('The packages package type has been deleted.'));
        } else {
            $this->Flash->error(__('The packages package type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
