<?php  $this->layout = false; ?>
<?php echo $this->Html->css('/node_modules/font-awesome/css/font-awesome.min'); ?>
<?php echo $this->Html->css('style'); ?>

<title>
    <?php echo 'PROJECTS'; ?>
</title>

<header class="header-admin">
    <div class="header-admin__logo">
        <span class="header-admin__highlight">Peñaranda</span>
        <span>Admin</span>
    </div>
    <div class="header-admin__logout">
        <button class="header-admin__button">Logout</button
    </div>
</header>

<aside class="admin-sidebar">
    <nav class="admin-sidebar__navigation">
        <ul class="admin-sidebar__list">
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Projects</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects/add" class="admin-sidebar__link  admin-sidebar__link--active">
                        <div class="admin-sidebar__item-text">
                            <span>Add Projects</span>
                        </div>
                    </a>
                    <a href="/admin/projects/list" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Projects</span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Government</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/mayor/edit" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Edit Mayor</span>
                        </div>
                    </a>
                    <a href="/admin/vice-mayor/edit" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Edit Vice Mayor</span>
                        </div>
                    </a>
                    <a href="/admin/captain/edit" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Edit Captain</span>
                        </div>
                    </a>
                    <a href="/admin/councilor/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Councilor</span>
                        </div>
                    </a>
                    <a href="/admin/government/list" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Government</span>
                        </div>
                    </a>
                </div>
            </li>    
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Tourism</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Tourism</span>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Tourism</span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Services</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Services</span>
                        </div>
                    </a>
                    <a href="/admin/projects" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Services</span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Gallery</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/gallery/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Gallery</span>
                        </div>
                    </a>
                    <a href="/admin/gallery/list" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Gallery</span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>About us</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/about-us/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add About us</span>
                        </div>
                    </a>
                    <a href="/admin/about-us/list" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List About us</span>
                        </div>
                    </a>
                </div>
            </li>
            <li class="admin-sidebar__item">
                <a class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Alcaldez</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
                <div class="admin-sidebar__submenu">
                    <a href="/admin/alcaldez/add" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>Add Alcaldez</span>
                        </div>
                    </a>
                    <a href="/admin/alcaldez/list" class="admin-sidebar__link">
                        <div class="admin-sidebar__item-text">
                            <span>List Alcaldez</span>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</aside>

<div class="admin-form">
    <?= $this->Form->create('Government', [
        'type'    => 'POST',
        'enctype' => "multipart/form-data" ,
        'class'   => "form-field"
    ]) ?>
        <div class="form-field__list form-field__list--error">
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
                <input name="data[Government][birthday]" type="date" class="form-field__input">
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
                        'value'    => 'Mayor',
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
                <div class="form-field__image-wrapper">
                    <?php if(!empty($mayor['Government']['image'])): ?>
                        <img src="<?= $mayor['Government']['image'] ?>" class="form-field__image">
                    <?php else: ?>
                        <img src="/images/placeholder/placeholder.png" class="form-field__image">
                    <?php endif; ?>
                </div>
            </div>
        </div>  
        <div class="form-field__button">
            <input type="submit" value="Register" class="form-field__button-register">
        </div>
    </form

</div>
<?php echo $this->Html->script('jquery-3.1.0.min'); ?>
<?php echo $this->Html->script('common'); ?>