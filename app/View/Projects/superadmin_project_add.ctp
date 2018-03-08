<div class="admin-form">
    <?=
        $this->Form->create('Project', [
            'type'    => "POST",
            'enctype' => "multipart/form-data" ,
            'class'   => "form-field"
        ]);
    ?>
        <div class="form-field__list <?php echo $this->Form->error('title') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Title :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('title', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('title'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('description') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Description :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('description', [
                        'type'     => 'textarea',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'class'    => 'form-field__textarea'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('description'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Image :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('Upload.image', [
                        'type'     => 'file',
                        'id'       => 'input-file',
                        'required' => false,
                        'div'      => false,
                        'label'    => false,
                        'class'    => 'input__upload-img'
                    ]);
                ?>
                <div class="form-field__image-wrapper">
                    <img src="/images/placeholder/placeholder.png" class="form-field__image">
                </div>
                <span class="form-field__error"><?= $this->Form->error('image'); ?></span>
            </div>
        </div>
        <div class="form-field__button">
            <?=
                $this->Form->submit('Register', ['class' => "form-field__button-register"]);
            ?>
        </div>
    <?= $this->Form->end(); ?>
</div>