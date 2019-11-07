<?php
namespace App\Controller;

use Cake\Event\Event;

class MemosController extends AppController
{
  public function beforeFilter(Event $event)
  {
    parent::beforeFilter($event);
    $this->Auth->allow();
  }

  public function index()
  {
    $memos = $this->Memos->find('all');
    $this->set(compact('memos'));
  }

  public function view($id = null)
  {
    $memo = $this->Memos->get($id, [
      'contain'=>'Complements'
    ]);
    $this->set(compact('memo'));
  }

  public function add()
  {
    $memo = $this->Memos->newEntity();
    if ($this->request->is('post')) {
      $memo = $this->Memos->patchEntity($memo, $this->request->getData());
      if ($this->Memos->save($memo)) {
        $this->Flash->success('Add Success!');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('Add Error!');
      }
    }
    $this->set(compact('memo'));
  }

  public function edit($id = null)
  {
    $memo = $this->Memos->get($id);
    if ($this->request->is(['post', 'patch', 'put'])) {
      $memo = $this->Memos->patchEntity($memo, $this->request->getData());
      if ($this->Memos->save($memo)) {
        $this->Flash->success('Edit Success!');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('Edit Error!');
      }
    }
    $this->set(compact('memo'));
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $memo = $this->Memos->get($id);
    if ($this->Memos->delete($memo)) {
      $this->Flash->success('Delete Success!');
    } else {
      $this->Flash->error('Delete Error!');
    }
    return $this->redirect(['action'=>'index']);
  }
}
