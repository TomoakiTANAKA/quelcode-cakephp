<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidRequests Controller
 *
 * @property \App\Model\Table\BidRequestsTable $BidRequests
 *
 * @method \App\Model\Entity\BidRequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidRequestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BidItems', 'Users'],
        ];
        $bidRequests = $this->paginate($this->BidRequests);

        $this->set(compact('bidRequests'));
    }

    /**
     * View method
     *
     * @param string|null $id Bid Request id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidRequest = $this->BidRequests->get($id, [
            'contain' => ['BidItems', 'Users'],
        ]);

        $this->set('bidRequest', $bidRequest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidRequest = $this->BidRequests->newEntity();
        if ($this->request->is('post')) {
            $bidRequest = $this->BidRequests->patchEntity($bidRequest, $this->request->getData());
            if ($this->BidRequests->save($bidRequest)) {
                $this->Flash->success(__('The bid request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid request could not be saved. Please, try again.'));
        }
        $bidItems = $this->BidRequests->BidItems->find('list', ['limit' => 200]);
        $users = $this->BidRequests->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidRequest', 'bidItems', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Request id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidRequest = $this->BidRequests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidRequest = $this->BidRequests->patchEntity($bidRequest, $this->request->getData());
            if ($this->BidRequests->save($bidRequest)) {
                $this->Flash->success(__('The bid request has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid request could not be saved. Please, try again.'));
        }
        $bidItems = $this->BidRequests->BidItems->find('list', ['limit' => 200]);
        $users = $this->BidRequests->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidRequest', 'bidItems', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Request id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidRequest = $this->BidRequests->get($id);
        if ($this->BidRequests->delete($bidRequest)) {
            $this->Flash->success(__('The bid request has been deleted.'));
        } else {
            $this->Flash->error(__('The bid request could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
