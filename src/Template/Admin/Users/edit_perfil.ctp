<div class="d-flex align-items-center justify-content-between">
    <div class="p-2">
        <h2 class="display-4 titulo">Editar Perfil</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(__('Voltar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-primary btn-sm px-4']) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-bs-toggle="dropdown" aria-expanded="false">
                Ações
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="acoesListar">
                <li><?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'dropdown-item']) ?></li>
            </ul>
        </div>
    </div>
</div>
<hr>

<?= $this->Flash->render() ?>

<?= $this->Form->create($user) ?>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label"><span class="text-danger">*</span> Nome</label>
            <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome completo', 'label' => false]) ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label"><span class="text-danger">*</span> E-mail</label>
            <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Seu melhor e-mail', 'label' => false]) ?>
        </div>
    </div>
</div>

<div class="mb-3">
    <label class="form-label"><span class="text-danger">*</span> Usuário</label>
    <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Nome de usuário', 'label' => false]) ?>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>
