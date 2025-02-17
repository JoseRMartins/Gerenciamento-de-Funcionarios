<div class="px-3">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="titulo-container">
             <h2 class="mb-4 titulo display-6 d-sm-inline d-md-block text-sm-start text-md-center">
                <strong>Lista de Funcionários</strong>  
            </h2>
        </div>
    
        <div class="ms-auto">
            <?= $this->Html->link(__('Cadastrar'),
            [
            'controller' => 'users',
            'action' => 'add'],
            ['class' => 'btn btn-outline-success btn-sm px-5']) ?>
        </div>
    </div>
    
    <?=  $this->Flash->render(); ?>
    
    <div class="table-responsive text-center">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="d-none d-sm-table-cell">E-mail</th>
                    <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>     
            <tbody>
                <?php foreach ($users as $user): ?> <!------------ START FOREACH ---------->
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
    
                        <td><?= h($user->name) ?></td>
    
                        <td class="d-none d-sm-table-cell"><?= h($user->email) ?> </td>
    
                        <td class="d-none d-lg-table-cell"> <?= h($user->created) ?> </td>
    
                            <td class="actions text-center">
                                <!-- VIEW BUTTON -->
                                <?= $this->Html->link(__('Visualizar'),
                                [
                                'controller' => 'users',
                                'action' => 'view',
                                 $user->id,
                                ],
                                ['class' => 'btn btn-outline-primary btn-sm']) ?>
    
                                 <!-- EDIT BUTTON -->
                                 <?= $this->Html->link(__('Editar'),
                                [
                                'action' => 'edit',
                                $user->id
                                ],
                                ['class' => 'text-black btn btn-outline-warning btn-sm']) ?>
    
                                <!-- DELETE BUTTON -->
                                <?= $this->Form->postLink(
                                        __('Deletar'),
                                        ['controller' => 'Users', 'action' => 'delete', $user->id],
                                        [
                                            'confirm' => __('Você quer deletar esse usuário # {0}?', $user->id),
                                            'class' => 'btn btn-outline-danger btn-sm px-5'
                                        ]
                                    ); ?>
                            </td>
                    </tr>
                <?php endforeach; ?> <!------------ END FOREACH ---------->
            </tbody>
        </table>
        <?= $this->element('pagination') ?>
    </div>                                
</div>



<div class="px-3">
    <div class="d-flex justify-content-between align-items-center flex-wrap">
        <div class="titulo-container">
             <h2 class="mb-4 titulo display-6 d-sm-inline d-md-block text-sm-start text-md-center">
                <strong>Lista de Supervisores</strong>  
            </h2>
        </div>
    </div>
    
    <?=  $this->Flash->render(); ?>
    
    <div class="table-responsive text-center">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="d-none d-sm-table-cell">E-mail</th>
                    <th class="d-none d-lg-table-cell">Data do Cadastro</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>     
            <tbody>
                <?php foreach ($users as $user): ?> <!------------ START FOREACH ---------->
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
    
                        <td><?= h($user->name) ?></td>
    
                        <td class="d-none d-sm-table-cell"><?= h($user->email) ?> </td>
    
                        <td class="d-none d-lg-table-cell"> <?= h($user->created) ?> </td>
    
                            <td class="actions text-center">
                                <!-- VIEW BUTTON -->
                                <?= $this->Html->link(__('Visualizar'),
                                [
                                'controller' => 'users',
                                'action' => 'view',
                                 $user->id,
                                ],
                                ['class' => 'btn btn-outline-primary btn-sm']) ?>
    
                                 <!-- EDIT BUTTON -->
                                 <?= $this->Html->link(__('Editar'),
                                [
                                'action' => 'edit',
                                $user->id
                                ],
                                ['class' => 'text-black btn btn-outline-warning btn-sm']) ?>
    
                                <!-- DELETE BUTTON -->
                                <?= $this->Form->postLink(
                                        __('Deletar'),
                                        ['controller' => 'Users', 'action' => 'delete', $user->id],
                                        [
                                            'confirm' => __('Você quer deletar esse usuário # {0}?', $user->id),
                                            'class' => 'btn btn-outline-danger btn-sm px-5'
                                        ]
                                    ); ?>
                            </td>
                    </tr>
                <?php endforeach; ?> <!------------ END FOREACH ---------->
            </tbody>
        </table>
        <?= $this->element('pagination') ?>
    </div>                                
</div>