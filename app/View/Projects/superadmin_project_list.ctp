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
<?= $this->Session->flash(); ?>
<div class="admin-form">
    <div class="admin-table">
        <table class="admin-table__wrapper">
            <thead>
                <tr class="admin-table__head">
                    <th class="admin-table__title">ID</th>
                    <th class="admin-table__title">Title</th>
                    <th class="admin-table__title">Description</th>
                    <th class="admin-table__title">Date</th>
                    <th class="admin-table__title" colspan="2">Action</th>
                <tr>
            <thead>
            <tbody>
                <?php foreach($project_lists as $project): ?>
                <tr class="admin-table__row">
                    <td class="admin-table__result"><?= $project['Project']['id'] ?></td>
                    <td class="admin-table__result"><?= $project['Project']['title'] ?></td>
                    <td class="admin-table__result"><?= $project['Project']['description'] ?></td>
                    <td class="admin-table__result"><?= date('Y-m-d', strtotime($project['Project']['created'])) ?></td>
                    <td class="admin-table__result" colspan="2">
                        <div class="admin-table__action">
                            <a href="/superadmin/projects/edit/<?= $project['Project']['id'] ?>" class="admin-table__link">Edit</a>
                        </div>
                        <div class="admin-table__action">
                            <a href="/superadmin/projects/delete/<?= $project['Project']['id'] ?>" class="admin-table__link admin-table__link--delete">Delete</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="pagination">
            <ul>
                <?php 
                    $paginatorParams = $this->Paginator->params();

                    if (count($project_lists) != 0 && $paginatorParams['count'] > $paginatorParams['limit']) {
                        // previous
                        echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled'));
                        // the 'number' page buttons
                        echo $this->Paginator->numbers([
                            'modulus'      => 5, 
                            'separator'    => '',
                            'tag'          => 'li',
                            'currentClass' => 'pagination__link--active',
                            'class'        => 'pagination__list',
                        ]);
                        // next
                        echo $this->Paginator->next(' next > ', array(), null, array('class' => 'next disabled'));
                    }
                ?>
                <!-- <li class="pagination__list">
                    <a href="" class="pagination__link"><i class="fa fa-chevron-left"></i></a>
                </li>
                <li class="pagination__list">
                    <a href="" class="pagination__link pagination__link--active">1</a>
                </li>
                <li class="pagination__list">
                    <a href="" class="pagination__link">2</a>
                </li>
                <li class="pagination__list">
                    <a href="" class="pagination__link">3</a>
                </li>
                <li class="pagination__list">
                    <a href="" class="pagination__link"><i class="fa fa-chevron-right"></i></a>
                </li> -->
            </ul>
        </div>
    </div> 
</div>
<?php echo $this->Html->script('jquery-3.1.0.min'); ?>
<?php echo $this->Html->script('common'); ?>