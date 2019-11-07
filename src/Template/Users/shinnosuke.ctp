<?php
  $this->assign('title', 'MEMO: Shinnosuke');
?>
<h1 class="page-title">
  SHINNOSUKE
  <?= $this->Html->link('Back', ['controller'=>'Memos', 'action'=>'index'], ['class'=>['pull-right', 'fs14', 'lime']]); ?>
</h1>
<?= $this->Html->image('shinnosuke.jpg', ['alt'=>'阿部慎之助']);
