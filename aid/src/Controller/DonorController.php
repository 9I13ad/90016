<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donor Controller
 *
 * @property \App\Model\Table\DonorTable $Donor
 * @method \App\Model\Entity\Donor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $donor = $this->paginate($this->Donor);

        $this->set(compact('donor'));
    }

    /**
     * View method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donor = $this->Donor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('donor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donor = $this->Donor->newEmptyEntity();
        if ($this->request->is('post')) {
            $donor = $this->Donor->patchEntity($donor, $this->request->getData());
            if ($this->Donor->save($donor)) {
                $this->Flash->success(__('The donor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donor could not be saved. Please, try again.'));
        }
        $this->set(compact('donor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donor = $this->Donor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donor = $this->Donor->patchEntity($donor, $this->request->getData());
            if ($this->Donor->save($donor)) {
                $this->Flash->success(__('The donor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donor could not be saved. Please, try again.'));
        }
        $this->set(compact('donor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donor = $this->Donor->get($id);
        if ($this->Donor->delete($donor)) {
            $this->Flash->success(__('The donor has been deleted.'));
        } else {
            $this->Flash->error(__('The donor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
