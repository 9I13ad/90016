<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Recipient Controller
 *
 * @property \App\Model\Table\RecipientTable $Recipient
 * @method \App\Model\Entity\Recipient[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecipientController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $recipient = $this->paginate($this->Recipient);

        $this->set(compact('recipient'));
    }

    /**
     * View method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipient = $this->Recipient->get($id, [
            'contain' => [],
        ]);

        $this->loadModel('Child');
        $children = $this->Child->find('list', [
            'conditions' => ['RecipientID' => $recipient->id]
        ])->toArray();




        $this->set(compact('recipient','children'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipient = $this->Recipient->newEmptyEntity();
        if ($this->request->is('post')) {
            $recipient = $this->Recipient->patchEntity($recipient, $this->request->getData());
            if ($this->Recipient->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
        }
        $this->set(compact('recipient'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipient = $this->Recipient->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipient = $this->Recipient->patchEntity($recipient, $this->request->getData());
            if ($this->Recipient->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
        }
        $this->set(compact('recipient'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipient = $this->Recipient->get($id);
        if ($this->Recipient->delete($recipient)) {
            $this->Flash->success(__('The recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The recipient could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
