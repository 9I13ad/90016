<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aidkit Controller
 *
 * @property \App\Model\Table\AidkitTable $Aidkit
 * @method \App\Model\Entity\Aidkit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AidkitController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aidkit = $this->paginate($this->Aidkit);

        $this->set(compact('aidkit'));
    }

    /**
     * View method
     *
     * @param string|null $id Aidkit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aidkit = $this->Aidkit->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aidkit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aidkit = $this->Aidkit->newEmptyEntity();
        if ($this->request->is('post')) {
            $aidkit = $this->Aidkit->patchEntity($aidkit, $this->request->getData());
            if ($this->Aidkit->save($aidkit)) {
                $this->Flash->success(__('The aidkit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidkit could not be saved. Please, try again.'));
        }
        $this->set(compact('aidkit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aidkit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aidkit = $this->Aidkit->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aidkit = $this->Aidkit->patchEntity($aidkit, $this->request->getData());
            if ($this->Aidkit->save($aidkit)) {
                $this->Flash->success(__('The aidkit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidkit could not be saved. Please, try again.'));
        }
        $this->set(compact('aidkit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aidkit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aidkit = $this->Aidkit->get($id);
        if ($this->Aidkit->delete($aidkit)) {
            $this->Flash->success(__('The aidkit has been deleted.'));
        } else {
            $this->Flash->error(__('The aidkit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
