<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * EstablishmentSchedules Controller
 *
 * @property \Admin\Model\Table\EstablishmentSchedulesTable $EstablishmentSchedules
 *
 * @method \Admin\Model\Entity\EstablishmentSchedule[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablishmentSchedulesController extends AppController
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
        $establishmentSchedules = $this->paginate($this->EstablishmentSchedules);

        $this->set(compact('establishmentSchedules'));
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Schedule id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentSchedule = $this->EstablishmentSchedules->get($id, [
            'contain' => ['Establishments'],
        ]);

        $this->set('establishmentSchedule', $establishmentSchedule);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentSchedule = $this->EstablishmentSchedules->newEntity();
        if ($this->request->is('post')) {
            $establishmentSchedule = $this->EstablishmentSchedules->patchEntity($establishmentSchedule, $this->request->getData());
            if ($this->EstablishmentSchedules->save($establishmentSchedule)) {
                $this->Flash->success(__('The establishment schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment schedule could not be saved. Please, try again.'));
        }
        $establishments = $this->EstablishmentSchedules->Establishments->find('list', ['limit' => 200]);
        $this->set(compact('establishmentSchedule', 'establishments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentSchedule = $this->EstablishmentSchedules->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentSchedule = $this->EstablishmentSchedules->patchEntity($establishmentSchedule, $this->request->getData());
            if ($this->EstablishmentSchedules->save($establishmentSchedule)) {
                $this->Flash->success(__('The establishment schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment schedule could not be saved. Please, try again.'));
        }
        $establishments = $this->EstablishmentSchedules->Establishments->find('list', ['limit' => 200]);
        $this->set(compact('establishmentSchedule', 'establishments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentSchedule = $this->EstablishmentSchedules->get($id);
        if ($this->EstablishmentSchedules->delete($establishmentSchedule)) {
            $this->Flash->success(__('The establishment schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
