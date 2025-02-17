<div class="d-flex justify-content-between">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Foto de Perfil</h2>
    </div>
    <div class="p-3">
        <span>
            <?= $this->Html->link(__('Cancelar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-danger btn-sm px-4']) ?>
        </span>
</div>

    </div>
</div><hr>
<?= $this->Flash->render() ?>

<?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>


<div class="container">
    <div class="row">
        <div class="col-6 form-group">
            <label> <span class="text-danger">*</span>Foto (150x150)</label>
            <?= $this->Form->control('image', 
            ['class' => 'form-control',
            'type' => 'file',
            'label' => false,
            'onchange' => 'previewImage()',
            ]) ?>
        </div>
        <div class="col-6">
            <?php
                if($user->image !== null){
                    $image_antiga = '../../files/user/' . $user->id . '/' . $user->image;
                }else{
                    $image_antiga = '../../files/user/default.jpg';
                }
            ?>

            <img src="<?= $image_antiga ?>" alt="<?= $user->name ?>" 
            class="img-thumbnail" style="width: 150px; height: 150px;" id="preview-img">
        </div>
    </div>
</div>


<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning mt-3']) ?>
<?= $this->Form->end() ?>