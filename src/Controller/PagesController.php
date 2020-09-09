<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

class PagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        $this->Auth->allow(['register', 'logout']);

        $this->loadModel('Users');
        $this->loadModel('Admin.Establishments');

        $isMobile = $this->request->is('mobile') ? true : false;
        $this->set('isMobile', $isMobile);

        $establishment = $this->Establishments->get(1);
        $this->set('establishment', $establishment);

        $weeknames = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sábado'];
        $this->set('weeknames', $weeknames);
    }

    public function home()
    {
        $this->layout = 'home';
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'Pages', 'action' => 'agenda', 'uuid' => $this->Auth->user('uuid')]);
            }
            $this->Flash->error('Usuário ou senha incorretos.');
        }
    }

    public function logout()
    {
        $this->Flash->success('Volte sempre!');
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso!'));
                return $this->redirect(['action' => 'register']);
            }
            if ($user->errors('username._isUnique')) {
                $this->Flash->error($user->errors('username._isUnique'));
                return;
            }
            $this->Flash->error(__('Erro ao cadastrar usuário. Tente novamente.'));
        }
        $this->set('user', $user);
    }

    public function remember()
    {

    }

    public function agenda($uuid = null)
    {
        $establishment = $this->Establishments->get(1, ['contain' => ['EstablishmentSchedules', 'EstablishmentServices', 'EstablishmentServices.Services']]);
        $this->set('establishment', $establishment);

        $this->loadModel('Admin.Agendas');
        $this->loadModel('Admin.Barbers');
        $agenda = $this->Agendas->find('all')
            ->where([
                'Agendas.user_id' => 1,
                'Agendas.establishment_id' => 1,
                'Agendas.canceled' => false,
            ])
            ->contain([
                'Barbers',
                'Services'
            ])
            ->order([
                'Agendas.service_date' => 'ASC',
                'Agendas.service_start' => 'ASC',
            ])
            ->limit(10)
            ->toArray();

        $this->set('agenda', $agenda);
    }

    public function schedule($uuid = null)
    {
        $servicesList = $this->getServicesByEstablishment(1);
        $this->set('servicesList', $servicesList);

        $barberList = $this->getBarbersByEstablishment(1);
        $this->set('barberList', $barberList);

        $dateList = [
            '2020-09-10',
            '2020-09-11',
            '2020-09-12',
            '2020-09-14',
            '2020-09-15',
        ];
        $this->set('dateList', $dateList);

        $timeList = [
            '09:00',
            '09:30',
            '10:00',
            '10:30',
        ];
        $this->set('timeList', $timeList);
    }

    private function getServicesByEstablishment($establishmentId = null)
    {
        $servicesList = [];
        $services = $this->Establishments->get($establishmentId,
            [
                'contain' => [
                    'EstablishmentServices.Services' => [
                        'conditions' => [
                            'Services.enabled' => true,
                            'EstablishmentServices.enabled' => true,
                        ]
                    ]
                ]
            ]
        );
        if (!empty($services)) {
            foreach ($services['EstablishmentServices'] as $establishmentService) {
                $servicesList[$establishmentService->service_id] = $establishmentService->service->name;
            }
            return $servicesList;
        }
        return null;
    }

    private function getBarbersByEstablishment($establishmentId = null)
    {
        $barberList = [];
        $barbers = $this->Establishments->get(1,
            [
                'contain' => [
                    'Barbers' => [
                        'conditions' => [
                            'Barbers.enabled' => true,
                            'Barbers.available' => true,
                        ]
                    ]
                ]
            ]
        );
        if (!empty($barbers)) {
            foreach ($barbers['Barbers'] as $establishmentBarber) {
                $barberList[$establishmentBarber->id] = $establishmentBarber->name;
            }
            return $barberList;
        }
        return null;
    }


}
