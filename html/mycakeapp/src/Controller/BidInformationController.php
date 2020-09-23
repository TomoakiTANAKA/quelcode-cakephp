<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidInformation Controller
 *
 * @property \App\Model\Table\BidInformationTable $BidInformation
 *
 * @method \App\Model\Entity\BidInformation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidInformationController extends AppController
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
        $bidInformation = $this->paginate($this->BidInformation);

        $this->set(compact('bidInformation'));
    }

    /**
     * View method
     *
     * @param string|null $id Bid Information id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidInformation = $this->BidInformation->get($id, [
            'contain' => ['BidItems', 'Users', 'BidMessages'],
        ]);

        $this->set('bidInformation', $bidInformation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidInformation = $this->BidInformation->newEntity();
        if ($this->request->is('post')) {
            $bidInformation = $this->BidInformation->patchEntity($bidInformation, $this->request->getData());
            if ($this->BidInformation->save($bidInformation)) {
                $this->Flash->success(__('The bid information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid information could not be saved. Please, try again.'));
        }
        $bidItems = $this->BidInformation->BidItems->find('list', ['limit' => 200]);
        $users = $this->BidInformation->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidInformation', 'bidItems', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidInformation = $this->BidInformation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidInformation = $this->BidInformation->patchEntity($bidInformation, $this->request->getData());
            if ($this->BidInformation->save($bidInformation)) {
                $this->Flash->success(__('The bid information has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid information could not be saved. Please, try again.'));
        }
        $bidItems = $this->BidInformation->BidItems->find('list', ['limit' => 200]);
        $users = $this->BidInformation->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidInformation', 'bidItems', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidInformation = $this->BidInformation->get($id);
        if ($this->BidInformation->delete($bidInformation)) {
            $this->Flash->success(__('The bid information has been deleted.'));
        } else {
            $this->Flash->error(__('The bid information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
