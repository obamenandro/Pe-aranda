<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Services</h2>
	</div>
</section>

<section class="services">
    <div class="container">

        <ul class="services__list">
            <li class="services__item-title">Type of FrontLine Service</li>
            <li class="services__item-title">FEES</li>
            <li class="services__item-title">FORMS</li>
            <li class="services__item-title">Processing Time</li>
            <li class="services__item-title">Office Responsible</li>
        </ul>
        <?php foreach($services as $service): ?>
        <ul class="services__list">
            <li class="services__item-result"><?= $service['Service']['name'] ?></li>
            <li class="services__item-result"><?= $service['Service']['fee'] ?></li>
            <li class="services__item-result"><?= $service['Service']['form'] ?></li>
            <li class="services__item-result"><?= $service['Service']['process_time'] ?></li>
            <li class="services__item-result"><?= $service['Service']['office_responsible'] ?></li>
        </ul>
        <?php endforeach; ?>
    </div>
</section>