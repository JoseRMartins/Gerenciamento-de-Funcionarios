<div class="position-relative d-flex justify-content-between align-items-center border-bottom border-3 mb-5">

    <!-- Botão "Listar Funcionários" (Esquerda) -->
    <span class="d-none d-md-block">
        <?= $this->Html->link(__('Listar Funcionários'),
            ['controller' => 'users', 'action' => 'index', $user->id],
            ['class' => 'btn btn-outline-info btn-sm px-5']
        )?>
    </span>

    <!-- Título Centralizado -->
    <div class="text-center flex-grow-1 d-md-block d-flex justify-content-center">
        <h2 class="display-4 titulo ms-sm-3"><?= h($user->name)?>
            <span class="fs-6 fst-italic">
                <?= '(Funcionário)' ?>
            </span> 
        </h2>
    </div>

    <!-- Ações à Direita -->
    <div class="ms-auto p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Editar Dados'),
                ['controller' => 'users', 'action' => 'edit', $user->id],
                ['class' => 'text-black btn btn-outline-primary btn-sm px-5']
            )?>

            <?= $this->Html->link(__('Editar Senha'),
                ['controller' => 'users', 'action' => 'editPassword', $user->id],
                ['class' => 'text-black btn btn-outline-warning btn-sm px-5']
            )?>
        </span>

        <!-- Dropdown para Mobile -->
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" 
                    type="button" 
                    id="acoesListar" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                Ações
            </button>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="acoesListar">
                <li>
                    <?= $this->Html->link(__('Listar Funcionários'),
                        ['controller' => 'users', 'action' => 'index', $user->id],
                        ['class' => 'dropdown-item bg-info p-2 text-white bg-opacity-75 text-center py-3']
                    ) ?>
                </li>

                <li>
                <?= $this->Html->link(__('Editar Dados'),
                    ['controller' => 'users', 'action' => 'edit', $user->id],
                    ['class' => 'dropdown-item bg-primary p-2 text-white bg-opacity-75 text-center py-3']
                )?>
                </li>

                <li>
                <?= $this->Html->link(__('Editar Senha'),
                    ['controller' => 'users', 'action' => 'editPassword', $user->id],
                    ['class' => 'dropdown-item bg-warning p-2 text-black bg-opacity-75 text-center py-3']
                 )?>
                </li>
    

            </ul>
        </div>
    </div>

</div>
<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header text-center">
            <h4 class="mb-0">Dados do Funcionário</h4>
        </div>
        <div class="card-body">
            <!-- Foto -->
            <div class="d-flex flex-column align-items-center mb-4">
                <div class="mb-3">
                <?php if (!empty($user->image)) { ?>

                    <?= $this->Html->image(
                        '../files/user/' . 
                        $user->id . 
                        '/' . $user->image, 
                        ['class' => 'rounded-circle', 
                        'width' => '150', 
                        'height' => '150']) ?>&nbsp;

                    <?php } else { ?>

                    <?= $this->Html->image(
                        '../files/user/default.jpg', 
                        ['class' => 'rounded-circle', 
                        'width' => '35', 
                        'height' => '35']) ?>&nbsp;

                    <?php } ?>
                </div>
            </div>

            <!-- Informações do Usuário -->
            <div class="mb-3">
                <strong>Nome:</strong> 
                <span><?= $user->name ?></span>
            </div>
            <div class="mb-3">
                <strong>Usuário:</strong> 
                <span><?= $user->username ?></span>
            </div>
            <div class="mb-3">
                <strong>E-mail:</strong> 
                <span><?= $user->email ?></span>
            </div>
        </div>
    </div>
</div>
