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