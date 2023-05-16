<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Child Controller
 *
 * @property \App\Model\Table\ChildTable $Child
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChildController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('recipient');
        $recipients = $this->recipient->find('list')->toArray();


        $child = $this->paginate($this->Child);

        $this->set(compact('child', 'recipients'));
    }


    /**
     * View method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $child = $this->Child->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('child'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($recipientId = null)
    {
        $child = $this->Child->newEmptyEntity();
        if ($this->request->is('post')) {
            $child = $this->Child->patchEntity($child, $this->request->getData());
            if ($this->Child->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $this->set(compact('child'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $child = $this->Child->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $child = $this->Child->patchEntity($child, $this->request->getData());
            if ($this->Child->save($child)) {
                $this->Flash->success(__('The child has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The child could not be saved. Please, try again.'));
        }
        $this->set(compact('child'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Child id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $child = $this->Child->get($id);
        if ($this->Child->delete($child)) {
            $this->Flash->success(__('The child has been deleted.'));
        } else {
            $this->Flash->error(__('The child could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
