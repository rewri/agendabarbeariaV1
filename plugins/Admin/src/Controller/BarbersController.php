<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * Barbers Controller
 *
 * @property \Admin\Model\Table\BarbersTable $Barbers
 *
 * @method \Admin\Model\Entity\Barber[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarbersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Establishments'],
        ];
        $barbers = $this->paginate($this->Barbers);

        $this->set(compact('barbers'));
    }

    /**
     * View method
     *
     * @param string|null $id Barber id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barber = $this->Barbers->get($id, [
            'contain' => ['Establishments', 'Agendas', 'BarberSchedules', 'BarberServices'],
        ]);

        $this->set('barber', $barber);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barber = $this->Barbers->newEntity();
        if ($this->request->is('post')) {
            $barber = $this->Barbers->patchEntity($barber, $this->request->getData());
            if ($this->Barbers->save($barber)) {
                $this->Flash->success(__('The barber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber could not be saved. Please, try again.'));
        }
        $establishments = $this->Barbers->Establishments->find('list', ['limit' => 200]);
        $this->set(compact('barber', 'establishments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Barber id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barber = $this->Barbers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barber = $this->Barbers->patchEntity($barber, $this->request->getData());
            if ($this->Barbers->save($barber)) {
                $this->Flash->success(__('The barber has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber could not be saved. Please, try again.'));
        }
        $establishments = $this->Barbers->Establishments->find('list', ['limit' => 200]);
        $this->set(compact('barber', 'establishments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Barber id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barber = $this->Barbers->get($id);
        if ($this->Barbers->delete($barber)) {
            $this->Flash->success(__('The barber has been deleted.'));
        } else {
            $this->Flash->error(__('The barber could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
