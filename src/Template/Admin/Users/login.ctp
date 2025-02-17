<?= $this->Form->create('post', ['class' => 'form-signin container d-flex flex-column align-items-center justify-content-center', 'style' => 'max-width: 400px; margin-top: 50px;']) ?>

<div class="card shadow-lg p-4 border-0 rounded-4 w-100">
    <div class="text-center">
        <?= $this->Html->image('logo_celke.png', ['class' => 'mb-3', 'alt' => 'Celke', 'width' => 72, 'height' => '72']) ?>
        <h2 class="h4 fw-bold text-primary">RH-Mais</h2>
    </div>

    <?= $this->Flash->render(); ?>

    <div class="mb-3">
        <?= $this->Form->control('username', [
            'type' => 'text', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Digite seu usuário', 
            'label' => ['text' => 'Usuário', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>
    
    <div class="mb-3">
        <?= $this->Form->control('password', [
            'type' => 'password', 
            'class' => 'form-control rounded-3', 
            'placeholder' => 'Digite sua senha', 
            'label' => ['text' => 'Senha', 'class' => 'form-label fw-semibold']
        ]); ?>
    </div>

    <?= $this->Form->button(__('Acessar'), ['class' => 'btn btn-primary w-100 py-2 rounded-3 fw-bold']) ?>
    
    <p class="text-center mt-3 small">
        <?= $this->Html->link(__('Cadastrar'), ['controller' => 'Users', 'action' => 'cadastrar'], ['class' => 'text-decoration-none text-primary fw-bold']) ?> | 
        <?= $this->Html->link(__('Esqueceu a senha?'), ['controller' => 'Users', 'action' => 'forgotPassword'], ['class' => 'text-decoration-none text-danger fw-bold']) ?>
    </p>
</div>

<?= $this->Form->end() ?>