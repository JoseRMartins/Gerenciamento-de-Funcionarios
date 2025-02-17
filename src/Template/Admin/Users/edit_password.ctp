<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Senha</h2>
    </div>
    <div class="p-3">
        <span>
            <?= $this->Html->link(__('Cancelar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-danger btn-sm px-4']) ?>
        </span>
</div>

    </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($user) ?>

<div class="form-row">
    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> Senha</label>
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'A senha deve ter no mínimo 6 caracteres', 'value' => '', 'label' => false]) ?>
    </div>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Form->end() ?>
