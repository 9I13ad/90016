<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donation Controller
 *
 * @property \App\Model\Table\DonationTable $Donation
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $donation = $this->paginate($this->Donation);

        $this->set(compact('donation'));
    }

    /**
     * View method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donation = $this->Donation->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('donation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donation = $this->Donation->newEmptyEntity();
        if ($this->request->is('post')) {
            $donation = $this->Donation->patchEntity($donation, $this->request->getData());
            if ($this->Donation->save($donation)) {
                $this->Flash->success(__('The donation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donation could not be saved. Please, try again.'));
        }
        $this->set(compact('donation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donation = $this->Donation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donation = $this->Donation->patchEntity($donation, $this->request->getData());
            if ($this->Donation->save($donation)) {
                $this->Flash->success(__('The donation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donation could not be saved. Please, try again.'));
        }
        $this->set(compact('donation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donation = $this->Donation->get($id);
        if ($this->Donation->delete($donation)) {
            $this->Flash->success(__('The donation has been deleted.'));
        } else {
            $this->Flash->error(__('The donation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
