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

    <span>
        <?= $this->Html->link(__('Visualizar'),
            [
            'controller' => 'users',
            'action' => 'view',
                $user->id,
            ], 
            ['class' => 'btn btn-outline-primary btn-sm px-5']) 
        ?> 
    </span>
    <!-- Ações à Direita -->
    <div class="ms-auto p-2">
        <span class="d-none d-md-block">

            <?= $this->Form->postLink(
                __('Deletar'),
                ['controller' => 'Users', 'action' => 'delete', $user->id],
                [
                    'confirm' => __('Você quer deletar esse usuário # {0}?', $user->id),
                    'class' => 'btn btn-outline-danger btn-sm px-5'
                ]
            ); ?>
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
                    <?= $this->Form->postLink(__('Deletar'),
                        ['controller' => 'Users', 'action' => 'delete', $user->id],
                        [
                            'confirm' => __('Você quer deletar esse usuário # {0}?', $user->id),
                            'class' => 'dropdown-item bg-danger p-2 text-black bg-opacity-75 text-center py-3'
                        ]
                    ); ?>
                </li>
            </ul>
        </div>
    </div>

</div>

<?= $this->Form->create($user) ?>
<div class="row px-4">


    <div class="form-group col-md-6 mb-4">
        <label><span class="text-danger">*</span> Nome </label>
        <?= $this->Form->control(
            'name', 
            [
            'class' => 'form-control', 
            'placeholder' => 'Nome completo', 
            'label' => false,
            ]) ?>
    </div>


    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> E-mail </label>
        <?php 
            echo $this->Form->control(
            'email',
            [
            'class' => 'form-control',
            'placeholder' => 'Seu melhor e-mail',
            'label' => false,
            ]);
        ?>
    </div>


    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> UserName </label>
        <?php 
            echo $this->Form->control(
            'username',
            [
            'class' => 'form-control',
            'placeholder' => 'Seu nome de Usuário (será usado para login)',
            'label' => false,
            ])
        ?>
    </div>


    <div class="d-flex justify-content-start mt-3">
        <?= $this->Html->link(__('Cancelar'),
        ['controller' => 'users', 'action' => 'index'],
        ['class' => 'p-2 text-black btn btn-outline-danger btn-sm px-5 border border-2 border border-danger me-3']) ?>
        
        <?= $this->Form->button(__('Editar'), ['class' => 'p-2 text-black btn btn-outline-warning btn-sm px-5 border border-2 border border-warning']) ?>
    </div>
</div>

<?= $this->Form->end() ?>


<!-- <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
