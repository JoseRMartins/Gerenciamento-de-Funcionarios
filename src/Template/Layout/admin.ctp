<?php
$cakeDescription = 'Administrativo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->script('fontawesome-all.min') ?>
    <?= $this->Html->css(['fontawesome.min', 'dashboard']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<?= $this->element('cabecalho') ?>

<div class="d-flex">
    <?= $this->element('menu') ?>
    
    <div class="content p-1">
        <div class="list-group-item">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
</div>



<?= $this->Html->script(['jquery-3.7.1.js', 'bootstrap.min', 'popper.min', 'dashboard', 'bootstrap.bundle.min']) ?>
</body>
</html>
