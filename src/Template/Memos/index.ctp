<?php
  $this->assign('title', 'MEMO: 一覧');
?>
<h1 class="page-title">
  一覧
  <?= $this->Html->link('新規作成', ['action'=>'add'], ['class'=>['fs14', 'pull-right', 'lime']]); ?>
</h1>
<ul>
<?php foreach ($memos as $memo) : ?>
  <li>
    <?= $this->Html->link($memo->body, ['action'=>'view', $memo->id]); ?>
    <?= $this->Html->link('**編集', ['action'=>'edit', $memo->id], ['class'=>['fs14', 'lime']]); ?>
    <?= $this->Form->postlink('**削除', ['action'=>'delete', $memo->id], ['class'=>['fs14', 'red'], 'confirm'=>'本当に削除しますか？']); ?>
  </li>
<?php endforeach; ?>
</ul>
