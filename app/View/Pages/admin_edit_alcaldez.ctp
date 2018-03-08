<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <form class="form-field">
        <div class="form-field__list form-field__list--error">
            <label class="form-field__label">Name :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input" value="Jose Protacio">
                <span class="form-field__error">error message</span>
            </div>
        </div>
        <div class="form-field__list">
            <label class="form-field__label">Years In Service :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input" value="2018 - 2019">
            </div>
        </div>
        <div class="form-field__list">
            <label class="form-field__label">Position :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input" value="Mayora">
            </div>
        </div>
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form>
</div>