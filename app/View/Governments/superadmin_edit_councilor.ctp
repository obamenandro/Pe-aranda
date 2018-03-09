<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <?= $this->Session->flash(); ?>
    <?= $this->Form->create('Government', [
        'type'    => 'POST',
        'enctype' => "multipart/form-data" ,
        'class'   => "form-field"
    ]) ?>
        <div class="form-field__list">
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
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Birthday :</label>
            <div class="form-field__input-wrapper">
                <input name="data[Government][birthday]" type="date" class="form-field__input" value="<?= isset($councilor['Government']['birthday']) ? $councilor['Government']['birthday'] : "" ?>">
                <span class="form-field__error"><?= $this->Form->error('birthday'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Message :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('message', [
                        'type'     => 'textarea',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'class'    => 'form-field__textarea'
                    ]);
                ?>
                <span class="form-field__error"><?= $this->Form->error('message'); ?></span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Position :</label>
            <div class="form-field__input-wrapper">
                <?=
                    $this->Form->input('position', [
                        'type'     => 'text',
                        'div'      => false,
                        'label'    => false,
                        'required' => false,
                        'error'    => false,
                        'class'    => 'form-field__input',
                        'value'    => 'Councilor',
                        'disabled' => true
                    ]);
                ?>
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
                <span class="form-error-image"><?php echo __('please upload jpg, jpeg, gif, png only'); ?></span>
                <div class="form-field__image-wrapper">
                    <?php if(!empty($councilor['Government']['image'])): ?>
                        <img src="<?= $councilor['Government']['image'] ?>" class="form-field__image">
                    <?php else: ?>
                        <img src="/images/placeholder/placeholder.png" class="form-field__image">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form>
</div>
