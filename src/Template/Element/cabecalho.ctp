<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle text-light mr-3">
        <span class="navbar-toggler-icon"></span>
    </a>

    <a class="navbar-brand" href="#">Celke</a>

<div class="collapse navbar-collapse justify-content-end">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">

            <a class="me-3 nav-link dropdown-toggle menu-header" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">

                <?php if (!empty($perfilUser->image)) { ?>

                    <?= $this->Html->image(
                        '../files/user/' . 
                        $perfilUser->id . 
                        '/' . $perfilUser->image, 
                        ['class' => 'rounded-circle', 
                        'width' => '35', 
                        'height' => '35']) ?>&nbsp;

                <?php } else { ?>
                
                    <?= $this->Html->image(
                        '../files/user/default.jpg', 
                        ['class' => 'rounded-circle', 
                        'width' => '35', 
                        'height' => '35']) ?>&nbsp;

                <?php } ?>


                <span class="d-none d-sm-inline">
                    <?= current(str_word_count($perfilUser->name, 2)) ?> 
                </span>

            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                <?= $this->Html->link(
                    '<i class="fas fa-user"></i> Perfil', 
                    ['controller' => 'Users', 
                    'action' => 'perfil'], 
                    ['class' => 'dropdown-item', 
                    'escape' => false]) ?>

                <?= $this->Html->link(
                    '<i class="fas fa-sign-out-alt"></i> Sair', 
                    ['controller' => 'Users', 
                    'action' => 'logout'], 
                    ['class' => 'dropdown-item', 
                    'escape' => false]) ?>

            </div>
        </li>
    </ul>                
</div>

</nav>