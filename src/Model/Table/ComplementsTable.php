<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ComplementsTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
    $this->belongsTo('Memo');
  }

  public function validationDefault(Validator $validator)
  {
    $validator
      ->notEmpty('body')
      ->requirePresence('body')
      ->add('body', [
        'length' => [
          'rule' => ['minLength', 2],
          'message' => '※2文字以上で入力して下さい。'
        ]
      ]);
    return $validator;
  }
}
