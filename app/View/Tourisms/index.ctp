<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Tourism</h2>
	</div>
</section>

<div class="gallery">
    <div class="container">
        <ul class="gallery__list">
            <?php foreach($tourisms as $tourism): ?>
            <li class="gallery__item gallery__item--tourism">
                <div class="gallery__image-wrapper">
                    <img class="gallery__image" src="<?= $tourism['Tourism']['image'] ?>">
                </div>
                <div class="gallery__description">
                    <h3 class="gallery__image-title"><?= $tourism['Tourism']['title'] ?></h3>
                    <p class="gallery__image-detail"><?= $tourism['Tourism']['description'] ?></p>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="pagination pagination--gallery">
    <ul>
        <?php
            $paginatorParams = $this->Paginator->params();

            if (count($tourisms) != 0 && $paginatorParams['count'] > $paginatorParams['limit']) {
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

<?= $this->element('gototop'); ?>