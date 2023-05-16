<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donoridentitydocument Controller
 *
 * @property \App\Model\Table\DonoridentitydocumentTable $Donoridentitydocument
 * @method \App\Model\Entity\Donoridentitydocument[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonoridentitydocumentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $donoridentitydocument = $this->paginate($this->Donoridentitydocument);

        $this->set(compact('donoridentitydocument'));
    }

    /**
     * View method
     *
     * @param string|null $id Donoridentitydocument id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donoridentitydocument = $this->Donoridentitydocument->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('donoridentitydocument'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donoridentitydocument = $this->Donoridentitydocument->newEmptyEntity();
        if ($this->request->is('post')) {
            $donoridentitydocument = $this->Donoridentitydocument->patchEntity($donoridentitydocument, $this->request->getData());
            if ($this->Donoridentitydocument->save($donoridentitydocument)) {
                $this->Flash->success(__('The donoridentitydocument has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donoridentitydocument could not be saved. Please, try again.'));
        }
        $this->set(compact('donoridentitydocument'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donoridentitydocument id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donoridentitydocument = $this->Donoridentitydocument->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donoridentitydocument = $this->Donoridentitydocument->patchEntity($donoridentitydocument, $this->request->getData());
            if ($this->Donoridentitydocument->save($donoridentitydocument)) {
                $this->Flash->success(__('The donoridentitydocument has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donoridentitydocument could not be saved. Please, try again.'));
        }
        $this->set(compact('donoridentitydocument'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donoridentitydocument id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donoridentitydocument = $this->Donoridentitydocument->get($id);
        if ($this->Donoridentitydocument->delete($donoridentitydocument)) {
            $this->Flash->success(__('The donoridentitydocument has been deleted.'));
        } else {
            $this->Flash->error(__('The donoridentitydocument could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
