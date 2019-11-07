<?php
namespace App\Controller;

class ComplementsController extends AppController
{
//   public function index()
//   {
//     $memos = $this->Memos->find('all');
//     $this->set(compact('memos'));
//   }

  // public function view($id = null)
  // {
  //   $memo = $this->Memos->get($id);
  //   $this->set(compact('memo'));
  // }

  public function add()
  {
    $complement = $this->Complements->newEntity();
    if ($this->request->is('post')) {
      $complement = $this->Complements->patchEntity($complement, $this->request->getData());
      if ($this->Complements->save($complement)) {
        $this->Flash->success('Add Success!');
        return $this->redirect(['controller'=>'Memos', 'action'=>'view', $complement->memo_id]);
      } else {
        $this->Flash->error('Add Error!');
      }
    }
    $this->set(compact('complement'));
  }

  // public function edit($id = null)
  // {
  //   $memo = $this->Memos->get($id);
  //   if ($this->request->is(['post', 'patch', 'put'])) {
  //     $memo = $this->Memos->patchEntity($memo, $this->request->getData());
  //     if ($this->Memos->save($memo)) {
  //       $this->Flash->success('Edit Success!');
  //       return $this->redirect(['action'=>'index']);
  //     } else {
  //       $this->Flash->error('Edit Error!');
  //     }
  //   }
  //   $this->set(compact('memo'));
  // }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $complement = $this->Complements->get($id);
    if ($this->Complements->delete($complement)) {
      $this->Flash->success('Delete Success!');
    } else {
      $this->Flash->error('Delete Error!');
    }
    return $this->redirect(['controller'=>'Memos', 'action'=>'view', $complement->memo_id]);
  }
}
