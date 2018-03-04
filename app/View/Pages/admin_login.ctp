<?php  $this->layout = false; ?>
<?php echo $this->Html->css('style'); ?>
<title>
    <?php echo 'ADMIN LOGIN'; ?>
</title>

<div class="login">
    <div class="login__logo">
        <h2 class="login__title">
            <span class="login__title-highlight">Peñaranda</span>
            <span>Admin</span>
        </h2>
    </div>
    <form class="form-login">
        <div class="form-login__list form-login__list--error">
            <label class="form-login__label">Username</label>
            <input type="text" class="form-login__input">
            <span class="form-login__error">error</span>
        </div>
        <div class="form-login__list">
            <label class="form-login__label">Password</label>
            <input type="password" class="form-login__input">
        </div>
        <div class="form-login__button">
            <input type="submit" class="form-login__submit" value="Login">
        </div>
    </form>
</div>