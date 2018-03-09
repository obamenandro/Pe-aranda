<section class="showcase">
	<div class="container">
		<h1 class="showcase__highlight">Peñaranda Nueva Ecija</h1>
		<p class="showcase__paragraph">Peñaranda Budang Ganda!</p>
	</div>
</section>

<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__left"> Welcome to Peñaranda Website.
            <span class="newsletter__highlight">See the beautiful of our Place! </span>
        </h2>
	</div>
</section>

<section class="boxes">
	<div class="container">
        <div class="boxes__title"> 
            <h2>Mayor's Project</h2>
        </div>
        <?php foreach($projects as $project): ?>
        <div class="boxes__list">
			<img class="boxes__list-image" src="<?= h($project['Project']['image']) ?>">
			<h3 class="boxes__list-h3"><?= h($project['Project']['title']) ?></h3>
			<p class="boxes__list-paragraph"><?= h($project['Project']['description']) ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Budang Ganda</h2>
	</div>
</section>

<section class="boxes boxes--expectation">
	<div class="container">
		<div class="boxes__image-wrapper">
            <img class="boxes__image-info" src="images/events/6.jpg">
        </div>
        <div class="boxes__image-description">
            <div class="boxes__image-title">
                <h2>What to expect from Peñaranda Nueva Ecija?</h2>
            </div>
            <div class="boxes__list-offer">
                <p class="boxes__list-paragraph">We offer a good quality service for all business</p>
                <p class="boxes__list-paragraph">There are many resorts from different places here in our place</p>
                <p class="boxes__list-paragraph">You can go in our Irrigation and Beautiful sightings</p>
                <p class="boxes__list-paragraph">Go in our Mini Zoo</p>
            </div>
		</div>
	</div>
</section>

<?= $this->element('gototop'); ?>

<script>
	if ( $(window).width() > 767 ) {
		window.sr = ScrollReveal();
		sr.reveal('.boxes', { duration: 2000 }, 50);
		sr.reveal('.boxes--expectation', { duration: 2000 }, 50);
	}
</script>