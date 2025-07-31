<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackageTypes Controller
 *
 * @property \App\Model\Table\PackageTypesTable $PackageTypes
 */
class PackageTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PackageTypes->find();
        $packageTypes = $this->paginate($query);

        $this->set(compact('packageTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Package Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageType = $this->PackageTypes->get($id, contain: ['Packages']);
        $this->set(compact('packageType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageType = $this->PackageTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $packageType = $this->PackageTypes->patchEntity($packageType, $this->request->getData());
            if ($this->PackageTypes->save($packageType)) {
                $this->Flash->success(__('The package type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package type could not be saved. Please, try again.'));
        }
        $packages = $this->PackageTypes->Packages->find('list', limit: 200)->all();
        $this->set(compact('packageType', 'packages'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageType = $this->PackageTypes->get($id, contain: ['Packages']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageType = $this->PackageTypes->patchEntity($packageType, $this->request->getData());
            if ($this->PackageTypes->save($packageType)) {
                $this->Flash->success(__('The package type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package type could not be saved. Please, try again.'));
        }
        $packages = $this->PackageTypes->Packages->find('list', limit: 200)->all();
        $this->set(compact('packageType', 'packages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageType = $this->PackageTypes->get($id);
        if ($this->PackageTypes->delete($packageType)) {
            $this->Flash->success(__('The package type has been deleted.'));
        } else {
            $this->Flash->error(__('The package type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
