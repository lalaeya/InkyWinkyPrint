<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Customer Controller
 *
 * @property \App\Model\Table\CustomerTable $Customer
 */
class CustomerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Customer->find();
        $customer = $this->paginate($query);

        $this->set(compact('customer'));
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customer->get($id, contain: []);
        $this->set(compact('customer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */


public function add()
{
    $customer = $this->Customers->newEmptyEntity();
    if ($this->request->is('post')) {
        $customer = $this->Customers->patchEntity($customer, $this->request->getData());
        if ($this->Customers->save($customer)) {
            // Redirect to add package with cus_id
            return $this->redirect([
                'controller' => 'Packages',
                'action' => 'add',
                '?' => ['cus_id' => $customer->cus_id]
            ]);
        }
        $this->Flash->error(__('The customer could not be saved. Please, try again.'));
    }
    $this->set(compact('customer'));
}


    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customer->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customer->patchEntity($customer, $this->request->getData());
            if ($this->Customer->save($customer)) {
                $this->Flash->success(__('The customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The customer could not be saved. Please, try again.'));
        }
        $this->set(compact('customer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customer->get($id);
        if ($this->Customer->delete($customer)) {
            $this->Flash->success(__('The customer has been deleted.'));
        } else {
            $this->Flash->error(__('The customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
