<?php
  $this->assign('title', 'MEMO: Login');
?>
<h1 class="page-title">
  ログイン
  <?= $this->Html->link('Sign up', ['action'=>'sign_up'], ['class'=>['pull-right', 'fs14']]); ?>
  <?= $this->Html->link('Back', ['controller'=>'Memos', 'action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
</h1>
  <?= $this->Form->create(); ?>
  <?= $this->Form->input('username'); ?>
  <?= $this->Form->input('password'); ?>
  <?= $this->Form->submit('送信'); ?>
  <?= $this->Form->end(); ?>
