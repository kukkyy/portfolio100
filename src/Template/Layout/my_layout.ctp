<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('styles') ?>

</head>
<body>
    <?= $this->element('header') ?>
    <?= $this->Flash->render() ?>
    <?= $this->element('nav') ?>
    <div class="container">
      <?= $this->fetch('content') ?>
    </div>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') ?>
    <?= $this->Html->script('script') ?>
</body>
</html>
