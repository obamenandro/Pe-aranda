<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <form class="form-field form-field--services">
        <div class="form-field__list form-field__list--error">
            <label class="form-field__label">Name of Service :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
                <span class="form-field__error">error message</span>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Fees :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Forms :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Processing Time :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Office Responsible :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
            </div>
        </div>
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form

</div>
<?php echo $this->Html->script('jquery-3.1.0.min'); ?>
<?php echo $this->Html->script('common'); ?>