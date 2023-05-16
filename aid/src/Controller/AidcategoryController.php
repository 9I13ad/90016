<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aidcategory Controller
 *
 * @property \App\Model\Table\AidcategoryTable $Aidcategory
 * @method \App\Model\Entity\Aidcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AidcategoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aidcategory = $this->paginate($this->Aidcategory);

        $this->set(compact('aidcategory'));
    }

    /**
     * View method
     *
     * @param string|null $id Aidcategory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aidcategory = $this->Aidcategory->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aidcategory'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aidcategory = $this->Aidcategory->newEmptyEntity();
        if ($this->request->is('post')) {
            $aidcategory = $this->Aidcategory->patchEntity($aidcategory, $this->request->getData());
            if ($this->Aidcategory->save($aidcategory)) {
                $this->Flash->success(__('The aidcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('aidcategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aidcategory id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aidcategory = $this->Aidcategory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aidcategory = $this->Aidcategory->patchEntity($aidcategory, $this->request->getData());
            if ($this->Aidcategory->save($aidcategory)) {
                $this->Flash->success(__('The aidcategory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aidcategory could not be saved. Please, try again.'));
        }
        $this->set(compact('aidcategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aidcategory id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aidcategory = $this->Aidcategory->get($id);
        if ($this->Aidcategory->delete($aidcategory)) {
            $this->Flash->success(__('The aidcategory has been deleted.'));
        } else {
            $this->Flash->error(__('The aidcategory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
