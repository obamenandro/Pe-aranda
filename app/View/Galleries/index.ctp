<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Gallery</h2>
	</div>
</section>

<div class="gallery">
    <div class="container">
        <ul class="gallery__list">
            <?php foreach($galleries as $gallery): ?>
            <li class="gallery__item">
                <img class="gallery__image" src="<?= $gallery['Gallery']['image'] ?>">
                <span class="gallery__image-title"><?= $gallery['Gallery']['title'] ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<div class="pagination pagination--gallery">
    <ul>
       <?php
            $paginatorParams = $this->Paginator->params();

            if (count($galleries) != 0 && $paginatorParams['count'] > $paginatorParams['limit']) {
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