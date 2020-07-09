<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

class PagesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['register', 'logout']);
    }

    public function home()
    {
        $this->layout = 'home';
    }

    public function login()
    {
        $this->loadModel('Users');
        $this->layout = 'login';
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
        $this->loadModel('Users');
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

    }


}
