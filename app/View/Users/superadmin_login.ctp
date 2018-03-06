<?php  $this->layout = false; ?>
<?php echo $this->Html->css('/node_modules/font-awesome/css/font-awesome.min'); ?>
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
    <?= $this->Form->create('User', ['class' => "form-login"]); ?>
    <?= $this->Session->flash(); ?>
        <div class="form-login__list">
            <label class="form-login__label">Username</label>
            <?= $this->Form->input('username', [
                'type'     => 'text',
                'class'    => 'form-login__input',
                'required' => false,
                'div'      => false,
                'label'    => false
            ]) ?>
        </div>
        <div class="form-login__list">
            <label class="form-login__label">Password</label>
            <?= $this->Form->input('password', [
                'type'     => 'password',
                'class'    => 'form-login__input',
                'required' => false,
                'div'      => false,
                'label'    => false
            ]) ?>
        </div>
        <div class="form-login__button">
            <input type="submit" class="form-login__submit" value="Login">
        </div>
    <?= $this->Form->end() ?>
</div>