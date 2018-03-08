<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <form class="form-field">
        <div class="form-field__list form-field__list--error">
            <label class="form-field__label">Title :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
                <span class="form-field__error">error message</span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Description :</label>
            <div class="form-field__input-wrapper">
                <textarea class="form-field__textarea"></textarea>
            </div>
        </div>
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form>
</div>