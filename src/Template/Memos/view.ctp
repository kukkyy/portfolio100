<?php
  $this->assign('title', 'MEMO: 詳細');
?>
<h1 class="page-title">
  <?= $this->Html->link('Back', ['action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
  詳細
</h1>
<?= h($memo->body); ?><br />
<?= h($memo->created); ?>

<h1 class="page-title">
  補足
</h1>
<?php if (count($memo->complements)) : ?>
  <ul>
    <?php foreach ($memo->complements as $complement) : ?>
    <li>
      <?= h($complement->body); ?>
      <?= $this->Form->postlink('**削除', ['action'=>'delete', $memo->id], ['class'=>['fs14', 'red'], 'confirm'=>'本当に削除しますか？']); ?>
    </li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
<?= $this->Form->create(null, [
  'url'=>['controller'=>'Complements', 'action'=>'add']
]); ?>
<?= $this->Form->input('body', ['rows'=>'10', 'label'=>'']); ?><br />
<?= $this->Form->hidden('memo_id', ['value'=>$memo->id]); ?>
<?= $this->Form->button('送信'); ?>
<?= $this->Form->end(); ?>
