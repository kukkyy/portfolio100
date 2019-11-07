<?php
  $this->assign('title', 'MEMO: 編集');
?>
<h1 class="page-title">
  編集
  <?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs14']]); ?>
</h1>
<?= $this->Form->create($memo); ?><br />
<?= $this->Form->input('body', ['rows'=>'10', 'label'=>'memo']); ?><br />
<?= $this->Form->button('更新'); ?>
<?= $this->Form->end(); ?>
