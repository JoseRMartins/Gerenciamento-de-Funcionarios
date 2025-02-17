<div class="position-relative d-flex justify-content-between align-items-center">

    <div class="position-absolute start-50 translate-middle-x">
        <h2 class="display-4 titulo">Cadastrar Funcionário</h2>
    </div>

    <div class="p-2">
        <?= $this->Html->link(__('Listar'),
        [
        'controller' => 'users',
        'action' => 'index'],
        ['class' => 'btn btn-outline-info btn-sm px-5']
        )?>
    </div>

</div>
<hr>

<?= $this->Form->create($user) ?>
<div class="row">


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


    <div class="form-group col-md-6">
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


    <div class="form-group col-md-6 mb-3">
        <label><span class="text-danger">*</span> Senha </label>
        <?= $this->Form->control(
            'password', 
            [
            'class' => 'form-control',
            'placeholder' => 'A senha de ter no mínimo 6 caracteres', 
            'label' => false
            ]) ?>
    </div>


</div>
<p><span class="text-danger">* </span>Campo obrigatório</p>
<?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success']) ?>
<?= $this->Form->end() ?>