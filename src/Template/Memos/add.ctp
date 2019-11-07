<?php
  $this->assign('title', 'MEMO: 新規作成');
?>
<h1 class="page-title">
  新規作成
  <?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
</h1>
<?= $this->Form->create($memo); ?>
<?= $this->Form->input('body', ['rows'=>'10', 'label'=>'memo']); ?><br />
<?= $this->Form->button('送信'); ?>
<?= $this->Form->end(); ?>
