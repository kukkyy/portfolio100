<nav>
  <ul>
    <li><?= $this->Html->link('Sign up', ['controller'=>'Users', 'action'=>'signUp'], ['class'=>'lime']); ?></li>|
    <li><?= $this->Html->link('login', ['controller'=>'Users', 'action'=>'login'], ['class'=>'lime']); ?></li>|
    <li><?= $this->Html->link('logout', ['controller'=>'Users', 'action'=>'logout'], ['class'=>'lime']); ?></li>|
    <li><?= $this->Html->link('しんのすけ', ['controller'=>'Users', 'action'=>'shinnosuke'], ['class'=>'lime']); ?></li>
  </ul>
</nav>
