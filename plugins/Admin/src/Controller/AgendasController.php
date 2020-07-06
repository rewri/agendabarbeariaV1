<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Agendas Controller
 *
 * @property \Admin\Model\Table\AgendasTable $Agendas
 *
 * @method \Admin\Model\Entity\Agenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Establishments', 'Barbers', 'Services'],
        ];
        $agendas = $this->paginate($this->Agendas);

        $this->set(compact('agendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => ['Users', 'Establishments', 'Barbers', 'Services'],
        ]);

        $this->set('agenda', $agenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenda = $this->Agendas->newEntity();
        if ($this->request->is('post')) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $users = $this->Agendas->Users->find('list', ['limit' => 200]);
        $establishments = $this->Agendas->Establishments->find('list', ['limit' => 200]);
        $barbers = $this->Agendas->Barbers->find('list', ['limit' => 200]);
        $services = $this->Agendas->Services->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'users', 'establishments', 'barbers', 'services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $users = $this->Agendas->Users->find('list', ['limit' => 200]);
        $establishments = $this->Agendas->Establishments->find('list', ['limit' => 200]);
        $barbers = $this->Agendas->Barbers->find('list', ['limit' => 200]);
        $services = $this->Agendas->Services->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'users', 'establishments', 'barbers', 'services'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda = $this->Agendas->get($id);
        if ($this->Agendas->delete($agenda)) {
            $this->Flash->success(__('The agenda has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
