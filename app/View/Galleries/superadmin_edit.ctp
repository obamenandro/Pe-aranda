<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <?= $this->Form->create('Gallery', [
        'type'    => 'POST',
        'enctype' => "multipart/form-data" ,
        'class'   => "form-field"
    ]) ?>
        <div class="form-field__gallery-wrapper">
            <div class="form-field__gallery-box">
                <div class="form-field__list form-field__list--error">
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
                <div class="form-field__list form-field__list--textarea">
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
                        <span class="form-error-image"><?php echo __('please upload jpg, jpeg, gif, png only'); ?></span>
                        <div class="form-field__image-wrapper">
                            <?php if(!empty($gallery['Gallery']['image'])): ?>
                                <img src="<?= $gallery['Gallery']['image'] ?>" class="form-field__image">
                            <?php else: ?>
                                <img src="/images/placeholder/placeholder.png" class="form-field__image">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-field__button">
            <input type="submit" value="Update" class="form-field__button-register">
        </div>
    </form>
</div>
