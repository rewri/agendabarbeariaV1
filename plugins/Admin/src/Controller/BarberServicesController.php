<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * BarberServices Controller
 *
 * @property \Admin\Model\Table\BarberServicesTable $BarberServices
 *
 * @method \Admin\Model\Entity\BarberService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarberServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Barbers', 'Services'],
        ];
        $barberServices = $this->paginate($this->BarberServices);

        $this->set(compact('barberServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Barber Service id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barberService = $this->BarberServices->get($id, [
            'contain' => ['Barbers', 'Services'],
        ]);

        $this->set('barberService', $barberService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barberService = $this->BarberServices->newEntity();
        if ($this->request->is('post')) {
            $barberService = $this->BarberServices->patchEntity($barberService, $this->request->getData());
            if ($this->BarberServices->save($barberService)) {
                $this->Flash->success(__('The barber service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber service could not be saved. Please, try again.'));
        }
        $barbers = $this->BarberServices->Barbers->find('list', ['limit' => 200]);
        $services = $this->BarberServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('barberService', 'barbers', 'services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Barber Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barberService = $this->BarberServices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barberService = $this->BarberServices->patchEntity($barberService, $this->request->getData());
            if ($this->BarberServices->save($barberService)) {
                $this->Flash->success(__('The barber service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barber service could not be saved. Please, try again.'));
        }
        $barbers = $this->BarberServices->Barbers->find('list', ['limit' => 200]);
        $services = $this->BarberServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('barberService', 'barbers', 'services'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Barber Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barberService = $this->BarberServices->get($id);
        if ($this->BarberServices->delete($barberService)) {
            $this->Flash->success(__('The barber service has been deleted.'));
        } else {
            $this->Flash->error(__('The barber service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
