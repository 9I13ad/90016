<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Partner Controller
 *
 * @property \App\Model\Table\PartnerTable $Partner
 * @method \App\Model\Entity\Partner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PartnerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $partner = $this->paginate($this->Partner);

        $this->set(compact('partner'));
    }

    /**
     * View method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partner = $this->Partner->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('partner'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partner = $this->Partner->newEmptyEntity();
        if ($this->request->is('post')) {
            $partner = $this->Partner->patchEntity($partner, $this->request->getData());
            if ($this->Partner->save($partner)) {
                $this->Flash->success(__('The partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner could not be saved. Please, try again.'));
        }
        $this->set(compact('partner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partner = $this->Partner->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partner = $this->Partner->patchEntity($partner, $this->request->getData());
            if ($this->Partner->save($partner)) {
                $this->Flash->success(__('The partner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partner could not be saved. Please, try again.'));
        }
        $this->set(compact('partner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partner = $this->Partner->get($id);
        if ($this->Partner->delete($partner)) {
            $this->Flash->success(__('The partner has been deleted.'));
        } else {
            $this->Flash->error(__('The partner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
