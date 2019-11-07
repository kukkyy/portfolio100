<?php
  $this->assign('title', 'MEMO: Sign up');
?>
<h1 class="page-title">
  ユーザー登録
  <?= $this->Html->link('Back', ['controller'=>'Memos', 'action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
</h1>
  <?= $this->Form->create($user); ?>
  <?= $this->Form->control('username'); ?>
  <?= $this->Form->control('password'); ?>
  <?= $this->Form->radio('gender', [
      ['value'=>'男性', 'text'=>'男性'],
      ['value'=>'女性', 'text'=>'女性'],
      ['value'=>'etc', 'text'=>'etc']
    ]); ?>
  <?= $this->Form->control('birthday', [
    'label'=>'生年月日',
    'type'=>'date',
    'monthNames'=>false,
    'empty'=>'-',
    'dateFormat'=>'YMD',
    'maxYear'=>date('Y'),
    'minYear'=>date('Y')-80
  ]); ?>
  <?= $this->Form->submit('送信'); ?>
  <?= $this->Form->end(); ?>
