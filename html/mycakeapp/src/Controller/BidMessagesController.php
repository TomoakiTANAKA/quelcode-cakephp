<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BidMessages Controller
 *
 * @property \App\Model\Table\BidMessagesTable $BidMessages
 *
 * @method \App\Model\Entity\BidMessage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BidMessagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BidInformations', 'Users'],
        ];
        $bidMessages = $this->paginate($this->BidMessages);

        $this->set(compact('bidMessages'));
    }

    /**
     * View method
     *
     * @param string|null $id Bid Message id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidMessage = $this->BidMessages->get($id, [
            'contain' => ['BidInformations', 'Users'],
        ]);

        $this->set('bidMessage', $bidMessage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidMessage = $this->BidMessages->newEntity();
        if ($this->request->is('post')) {
            $bidMessage = $this->BidMessages->patchEntity($bidMessage, $this->request->getData());
            if ($this->BidMessages->save($bidMessage)) {
                $this->Flash->success(__('The bid message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid message could not be saved. Please, try again.'));
        }
        $bidInformations = $this->BidMessages->BidInformations->find('list', ['limit' => 200]);
        $users = $this->BidMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidMessage', 'bidInformations', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bid Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidMessage = $this->BidMessages->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidMessage = $this->BidMessages->patchEntity($bidMessage, $this->request->getData());
            if ($this->BidMessages->save($bidMessage)) {
                $this->Flash->success(__('The bid message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bid message could not be saved. Please, try again.'));
        }
        $bidInformations = $this->BidMessages->BidInformations->find('list', ['limit' => 200]);
        $users = $this->BidMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('bidMessage', 'bidInformations', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bid Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidMessage = $this->BidMessages->get($id);
        if ($this->BidMessages->delete($bidMessage)) {
            $this->Flash->success(__('The bid message has been deleted.'));
        } else {
            $this->Flash->error(__('The bid message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
