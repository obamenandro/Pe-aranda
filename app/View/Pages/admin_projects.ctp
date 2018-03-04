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
                <a href="/admin/projects" class="admin-sidebar__link  admin-sidebar__link--active">
                    <div class="admin-sidebar__item-text">
                        <span>Projects</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Government</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>    
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Tourism</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Services</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Gallery</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>About us</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
            <li class="admin-sidebar__item">
                <a href="/admin/projects" class="admin-sidebar__link">
                    <div class="admin-sidebar__item-text">
                        <span>Alcaldez</span>
                    </div>
                    <div class="admin-sidebar__item-icon">
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<div class="admin-form">
    <form class="form-field">
        <div class="form-field__list">
            <label class="form-field__label">Title :</label>
            <div class="form-field__input-wrapper">
                <input type="text" class="form-field__input">
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Description :</label>
            <div class="form-field__input-wrapper">
                <textarea class="form-field__textarea"></textarea>
            </div>
        </div>
        <div class="form-field__list form-field__list--textarea">
            <label class="form-field__label">Image :</label>
            <div class="form-field__input-wrapper">
                <input type="file" hidden id="input-file">
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
    </form

</div>
<?php echo $this->Html->script('jquery-3.1.0.min'); ?>
<?php echo $this->Html->script('common'); ?>