<?php
  $this->assign('title', 'MEMO: U一覧');
?>
<h1 class="page-title">
  User一覧
  <?= $this->Html->link('Back', ['controller'=>'Memos', 'action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
</h1>
  <ul>
  <?php foreach ($users as $user) : ?>
    <li>
      <?= h($user->username); ?><br />
      <?= h($user->password); ?><br />
      <?= h($user->gender); ?><br />
      <?= h($user->birthday); ?><br />
      @@@@@@@@@@@@
    </li>
  <?php endforeach; ?>
  </ul>
