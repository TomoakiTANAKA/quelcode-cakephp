<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidItems Controller
 *
 * @property \App\Model\Table\BidItemsTable $BidItems
 *
 * @method \App\Model\Entity\BidItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $bidItems = $this->paginate($this->BidItems);

        $this->set(compact('bidItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Bid Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidItem = $this->BidItems->get($id, [
            'contain' => ['Users', 'BidInformation', 'BidRequests'],
        ]);

        $this->set('bidItem', $bidItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidItem = $this->BidItems->newEntity();
        if ($this->request->is('post')) {
            $bidItem = $this->BidItems->patchEntity($bidItem, $this->request->getData());
            if ($this->BidItems->save($bidItem)) {
                $this->Flash->success(__('The bid item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid item could not be saved. Please, try again.'));
        }
        $users = $this->BidItems->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidItem', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidItem = $this->BidItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidItem = $this->BidItems->patchEntity($bidItem, $this->request->getData());
            if ($this->BidItems->save($bidItem)) {
                $this->Flash->success(__('The bid item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid item could not be saved. Please, try again.'));
        }
        $users = $this->BidItems->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidItem', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidItem = $this->BidItems->get($id);
        if ($this->BidItems->delete($bidItem)) {
            $this->Flash->success(__('The bid item has been deleted.'));
        } else {
            $this->Flash->error(__('The bid item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
