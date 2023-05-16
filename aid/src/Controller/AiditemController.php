<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aiditem Controller
 *
 * @property \App\Model\Table\AiditemTable $Aiditem
 * @method \App\Model\Entity\Aiditem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AiditemController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aiditem = $this->paginate($this->Aiditem);

        $this->set(compact('aiditem'));
    }

    /**
     * View method
     *
     * @param string|null $id Aiditem id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aiditem = $this->Aiditem->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aiditem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aiditem = $this->Aiditem->newEmptyEntity();
        if ($this->request->is('post')) {
            $aiditem = $this->Aiditem->patchEntity($aiditem, $this->request->getData());
            if ($this->Aiditem->save($aiditem)) {
                $this->Flash->success(__('The aiditem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aiditem could not be saved. Please, try again.'));
        }
        $this->set(compact('aiditem'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aiditem id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aiditem = $this->Aiditem->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aiditem = $this->Aiditem->patchEntity($aiditem, $this->request->getData());
            if ($this->Aiditem->save($aiditem)) {
                $this->Flash->success(__('The aiditem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aiditem could not be saved. Please, try again.'));
        }
        $this->set(compact('aiditem'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aiditem id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aiditem = $this->Aiditem->get($id);
        if ($this->Aiditem->delete($aiditem)) {
            $this->Flash->success(__('The aiditem has been deleted.'));
        } else {
            $this->Flash->error(__('The aiditem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
