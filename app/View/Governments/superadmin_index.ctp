<?php  $this->layout = 'admin'; ?>

<div class="admin-form">
    <div class="admin-table">
        <table class="admin-table__wrapper">
            <thead>
                <tr class="admin-table__head">
                    <th class="admin-table__title">Name</th>
                    <th class="admin-table__title">Birthday</th>
                    <th class="admin-table__title">Message</th>
                    <th class="admin-table__title">Position</th>
                    <th class="admin-table__title" colspan="2">Action</th>
                <tr>
            <thead>
            <tbody>
                <?php foreach($governments as $government): ?>
                <tr class="admin-table__row">
                    <td class="admin-table__result"><?= h($government['Government']['name']) ?></td>
                    <td class="admin-table__result"><?= $government['Government']['birthday'] ?></td>
                    <td class="admin-table__result"><?= $government['Government']['message'] ?></td>
                    <td class="admin-table__result"><?= $government['Government']['position'] ?></td>
                    <td class="admin-table__result" colspan="2">
                        <div class="admin-table__action">
                            <a href="/superadmin/<?= Configure::read('position.'.$government['Government']['position']) ?>/edit/<?= $government['Government']['id'] ?>" class="admin-table__link">Edit</a>
                        </div>
                        <div class="admin-table__action">
                            <a class="admin-table__link admin-table__link--delete">Delete</a>
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

                    if (count($governments) != 0 && $paginatorParams['count'] > $paginatorParams['limit']) {
                        // previous
                        echo $this->Paginator->prev('< previous', array(), null, array('class' => 'prev disabled'));
                        // the 'number' page buttons
                        echo $this->Paginator->numbers([
                            'modulus'      => 5,
                            'separator'    => '',
                            'tag'          => 'li',
                            'class'        => 'pagination__list',
                            'currentClass' => 'pagination__list--active',
                        ]);
                        // next
                        echo $this->Paginator->next(' next > ', array(), null, array('class' => 'next disabled'));
                    }
                ?>
            </ul>
        </div>
    </div> 
</div>