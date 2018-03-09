<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <form class="form-field">
        <div class="form-field__list form-field__list--error">
            <label class="form-field__label">Name :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
                <span class="form-field__error">error message</span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Birthday :</label>
            <div class="form-field__input-wrapper">
                <input type="date" class="form-field__input">
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Message :</label>
            <div class="form-field__input-wrapper">
                <textarea class="form-field__textarea"></textarea>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Position :</label>
            <div class="form-field__input-wrapper">
                <input type="text" value="Barangay Captain" class="form-field__input" disabled>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Image :</label>
            <div class="form-field__input-wrapper">
                <input type="file" hidden id="input-file">
                <span class="form-error-image"><?php echo __('please upload jpg, jpeg, gif, png only'); ?></span>
                <a class="form-field__upload">Browse Image</a>
                <span class="form-field__upload-text">Image name</span>
                <div class="form-field__image-wrapper">
                    <img src="/images/placeholder/placeholder.png" class="form-field__image">
                </div>
            </div>
        </div>
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form>
</div>
