<?php
namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;

class UsersController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow(['signUp', 'logout', 'index']);
  }

  public function signUp() {
    $user = $this->Users->newEntity();
    if($this->request->is('post')){
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
        $this->Flash->success('Add success!');
        return $this->redirect(['controller'=>'Memos', 'action'=>'index']);
      } else {
        $this->Flash->error('Add error!');
      }
    }
    $this->set(compact('user'));
  }

  public function login()
  {
    if($this->request->is('post')) {
      $user = $this->Auth->identify();
      if(!empty($user)) {
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl());
      }
      $this->Flash->error('ユーザー名かパスワードが間違っています。');
    }
  }

  public function logout()
  {
    $this->request->session()->destroy();
    return $this->redirect($this->Auth->logout());
  }

  public function shinnosuke()
  {

  }

  public function index()
  {
      $users = $this->Users->find('all');
      $this->set(compact('users'));
  }
}
