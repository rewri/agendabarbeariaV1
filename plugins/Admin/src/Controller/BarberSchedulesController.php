<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * BarberSchedules Controller
 *
 * @property \Admin\Model\Table\BarberSchedulesTable $BarberSchedules
 *
 * @method \Admin\Model\Entity\BarberSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarberSchedulesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Barbers'],
        ];
        $barberSchedules = $this->paginate($this->BarberSchedules);

        $this->set(compact('barberSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Barber Schedule id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barberSchedule = $this->BarberSchedules->get($id, [
            'contain' => ['Barbers'],
        ]);

        $this->set('barberSchedule', $barberSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barberSchedule = $this->BarberSchedules->newEntity();
        if ($this->request->is('post')) {
            $barberSchedule = $this->BarberSchedules->patchEntity($barberSchedule, $this->request->getData());
            if ($this->BarberSchedules->save($barberSchedule)) {
                $this->Flash->success(__('The barber schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber schedule could not be saved. Please, try again.'));
        }
        $barbers = $this->BarberSchedules->Barbers->find('list', ['limit' => 200]);
        $this->set(compact('barberSchedule', 'barbers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Barber Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barberSchedule = $this->BarberSchedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barberSchedule = $this->BarberSchedules->patchEntity($barberSchedule, $this->request->getData());
            if ($this->BarberSchedules->save($barberSchedule)) {
                $this->Flash->success(__('The barber schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber schedule could not be saved. Please, try again.'));
        }
        $barbers = $this->BarberSchedules->Barbers->find('list', ['limit' => 200]);
        $this->set(compact('barberSchedule', 'barbers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Barber Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barberSchedule = $this->BarberSchedules->get($id);
        if ($this->BarberSchedules->delete($barberSchedule)) {
            $this->Flash->success(__('The barber schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The barber schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
