<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackageCovers Controller
 *
 * @property \App\Model\Table\PackageCoversTable $PackageCovers
 */
class PackageCoversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PackageCovers->find();
        $packageCovers = $this->paginate($query);

        $this->set(compact('packageCovers'));
    }

    /**
     * View method
     *
     * @param string|null $id Package Cover id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageCover = $this->PackageCovers->get($id, contain: []);
        $this->set(compact('packageCover'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageCover = $this->PackageCovers->newEmptyEntity();
        if ($this->request->is('post')) {
            $packageCover = $this->PackageCovers->patchEntity($packageCover, $this->request->getData());
            if ($this->PackageCovers->save($packageCover)) {
                $this->Flash->success(__('The package cover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package cover could not be saved. Please, try again.'));
        }
        $this->set(compact('packageCover'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package Cover id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageCover = $this->PackageCovers->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageCover = $this->PackageCovers->patchEntity($packageCover, $this->request->getData());
            if ($this->PackageCovers->save($packageCover)) {
                $this->Flash->success(__('The package cover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package cover could not be saved. Please, try again.'));
        }
        $this->set(compact('packageCover'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package Cover id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageCover = $this->PackageCovers->get($id);
        if ($this->PackageCovers->delete($packageCover)) {
            $this->Flash->success(__('The package cover has been deleted.'));
        } else {
            $this->Flash->error(__('The package cover could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
