<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * EstablishmentServices Controller
 *
 * @property \Admin\Model\Table\EstablishmentServicesTable $EstablishmentServices
 *
 * @method \Admin\Model\Entity\EstablishmentService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstablishmentServicesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Establishments', 'Services'],
        ];
        $establishmentServices = $this->paginate($this->EstablishmentServices);

        $this->set(compact('establishmentServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Establishment Service id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $establishmentService = $this->EstablishmentServices->get($id, [
            'contain' => ['Establishments', 'Services'],
        ]);

        $this->set('establishmentService', $establishmentService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $establishmentService = $this->EstablishmentServices->newEntity();
        if ($this->request->is('post')) {
            $establishmentService = $this->EstablishmentServices->patchEntity($establishmentService, $this->request->getData());
            if ($this->EstablishmentServices->save($establishmentService)) {
                $this->Flash->success(__('The establishment service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment service could not be saved. Please, try again.'));
        }
        $establishments = $this->EstablishmentServices->Establishments->find('list', ['limit' => 200]);
        $services = $this->EstablishmentServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('establishmentService', 'establishments', 'services'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Establishment Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $establishmentService = $this->EstablishmentServices->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $establishmentService = $this->EstablishmentServices->patchEntity($establishmentService, $this->request->getData());
            if ($this->EstablishmentServices->save($establishmentService)) {
                $this->Flash->success(__('The establishment service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The establishment service could not be saved. Please, try again.'));
        }
        $establishments = $this->EstablishmentServices->Establishments->find('list', ['limit' => 200]);
        $services = $this->EstablishmentServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('establishmentService', 'establishments', 'services'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Establishment Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $establishmentService = $this->EstablishmentServices->get($id);
        if ($this->EstablishmentServices->delete($establishmentService)) {
            $this->Flash->success(__('The establishment service has been deleted.'));
        } else {
            $this->Flash->error(__('The establishment service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
