<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <?= $this->Form->create('Service', [
        'type'    => 'POST',
        'enctype' => "multipart/form-data" ,
        'class'   => "form-field form-field--services"
    ]);?>
        <div class="form-field__list <?php echo $this->Form->error('name') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Name of Service :</label>
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
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('fee') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Fees :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('fee', [
                        'type'     => 'number',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('fee'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('form') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Forms :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('form', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('form'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('process_time') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Processing Time :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('process_time', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('process_time'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea <?php echo $this->Form->error('office_responsible') ? 'form-field__list--error' : '' ;?>">
            <label class="form-field__label">Office Responsible :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('office_responsible', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('office_responsible'); ?></span>
            </div>
        </div>
        <div class="form-field__button">
            <?= $this->Form->submit('Register', ['class' => 'form-field__button-register']) ?>
        </div>
    <?= $this->Form->end(); ?>

</div>
<?php echo $this->Html->script('jquery-3.1.0.min'); ?>
<?php echo $this->Html->script('common'); ?>