<?= $this->Form->create($user, ['class' => 'form-signin container d-flex flex-column align-items-center justify-content-center', 'style' => 'max-width: 400px; margin-top: 50px;']) ?>

<div class="card shadow-lg p-4 border-0 rounded-4 w-100">
    <div class="text-center">
        <h2 class="h4 fw-bold text-primary">
            Cadastrar
        </h2>
    </div>

    <?= $this->Flash->render(); ?>

    <div class="mb-3">
        <?= $this->Form->control('name', [
            'type' => 'text', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Digite seu nome', 
            'label' => ['text' => 'Nome', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>
    
    <div class="mb-3">
        <?= $this->Form->control('email', [
            'type' => 'email', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Digite seu e-mail', 
            'label' => ['text' => 'E-mail', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>
    
    <div class="mb-3">
        <?= $this->Form->control('username', [
            'type' => 'text', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Digite um nome de usuário', 
            'label' => ['text' => 'Nick', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>
    
    <div class="mb-3">
        <?= $this->Form->control('password', [
            'type' => 'password', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Crie uma senha (mínimo 6 caracteres)', 
            'label' => ['text' => 'Senha', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>

    <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success w-100 py-2 rounded-3 fw-bold']) ?>
    
    <p class="text-center mt-3 small">
        Já tem uma conta? <?= $this->Html->link(__('Faça login'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'text-decoration-none text-primary fw-bold']) ?>
    </p>
</div>

<?= $this->Form->end() ?>
