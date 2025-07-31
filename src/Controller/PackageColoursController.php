<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * PackageColours Controller
 *
 * @property \App\Model\Table\PackageColoursTable $PackageColours
 */
class PackageColoursController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->PackageColours->find();
        $packageColours = $this->paginate($query);

        $this->set(compact('packageColours'));
    }

    /**
     * View method
     *
     * @param string|null $id Package Colour id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $packageColour = $this->PackageColours->get($id, contain: []);
        $this->set(compact('packageColour'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $packageColour = $this->PackageColours->newEmptyEntity();
        if ($this->request->is('post')) {
            $packageColour = $this->PackageColours->patchEntity($packageColour, $this->request->getData());
            if ($this->PackageColours->save($packageColour)) {
                $this->Flash->success(__('The package colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package colour could not be saved. Please, try again.'));
        }
        $this->set(compact('packageColour'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Package Colour id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $packageColour = $this->PackageColours->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $packageColour = $this->PackageColours->patchEntity($packageColour, $this->request->getData());
            if ($this->PackageColours->save($packageColour)) {
                $this->Flash->success(__('The package colour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The package colour could not be saved. Please, try again.'));
        }
        $this->set(compact('packageColour'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Package Colour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $packageColour = $this->PackageColours->get($id);
        if ($this->PackageColours->delete($packageColour)) {
            $this->Flash->success(__('The package colour has been deleted.'));
        } else {
            $this->Flash->error(__('The package colour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
