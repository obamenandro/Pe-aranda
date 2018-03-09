<div class="admin-form">
    <?= $this->Form->create('Alcaldez', [
        'type'    => 'POST',
        'enctype' => "multipart/form-data" ,
        'class'   => "form-field"
    ]);?>
        <?= $this->Session->Flash() ?>
        <div class="form-field__list <?php echo $this->Form->error('name') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Name :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('name', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('name'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('year_services') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Years In Service :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('year_services', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('year_services'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('position') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Position :</label>
            <div class="form-field__input-wrapper">
                 <?=
                    $this->Form->input('position', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('position'); ?></span>
            </div>
        </div>
        <div class="form-field__button">
            <?= $this->Form->submit('Register', ['class' => "form-field__button-register"]); ?>
        </div>
    <?= $this->Form->end(); ?>
</div>