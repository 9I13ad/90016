<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aidrequisition Controller
 *
 * @property \App\Model\Table\AidrequisitionTable $Aidrequisition
 * @method \App\Model\Entity\Aidrequisition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AidrequisitionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aidrequisition = $this->paginate($this->Aidrequisition);

        $this->set(compact('aidrequisition'));
    }

    /**
     * View method
     *
     * @param string|null $id Aidrequisition id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aidrequisition = $this->Aidrequisition->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aidrequisition'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aidrequisition = $this->Aidrequisition->newEmptyEntity();
        if ($this->request->is('post')) {
            $aidrequisition = $this->Aidrequisition->patchEntity($aidrequisition, $this->request->getData());
            if ($this->Aidrequisition->save($aidrequisition)) {
                $this->Flash->success(__('The aidrequisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidrequisition could not be saved. Please, try again.'));
        }
        $this->set(compact('aidrequisition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aidrequisition id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aidrequisition = $this->Aidrequisition->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aidrequisition = $this->Aidrequisition->patchEntity($aidrequisition, $this->request->getData());
            if ($this->Aidrequisition->save($aidrequisition)) {
                $this->Flash->success(__('The aidrequisition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidrequisition could not be saved. Please, try again.'));
        }
        $this->set(compact('aidrequisition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aidrequisition id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aidrequisition = $this->Aidrequisition->get($id);
        if ($this->Aidrequisition->delete($aidrequisition)) {
            $this->Flash->success(__('The aidrequisition has been deleted.'));
        } else {
            $this->Flash->error(__('The aidrequisition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
