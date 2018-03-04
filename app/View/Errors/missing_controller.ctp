<?php  $this->layout = false; ?>
<?php echo $this->Html->css('/node_modules/font-awesome/css/font-awesome.min'); ?>
<?php echo $this->Html->css('style'); ?>

<title>
    <?php echo 'NOT FOUND'; ?>
</title>

<div class="not-found">
    <div class="not-found__icon-wrapper">
        <i class="fa fa-exclamation-triangle not-found__icon"></i>
    </div>
    <div class="not-found__message">
        <span class="not-found__message-title">404 NOT FOUND</span>
        <span class="not-found__note">Please check the url</span>
    </div>
</div>