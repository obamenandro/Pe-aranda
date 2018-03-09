<section class="newsletter">
	<div class="container">
        <div class="newsletter__tab-list">
            <div class="newsletter__tab">
                <a class="newsletter__link" href="/about-us">History</a>
            </div>
            <div class="newsletter__tab">
                <a class="newsletter__link newsletter__link--active" href="/alcaldez">Alcaldez</a>
            </div>
        </div>
	</div>
</section>

<section class="main">
    <div class="container">
        <article class="about-us about-us--alcaldez">
            <h2 class="about-us__title">Ang Alcadez ay ang mga nakaraang Administrasyon kung saan sila ang mga namuno simula noon</h2>
        
            <div class="about-us__column">
                <h3 class="about-us__subtitle">Pangalan</h3>
            </div>
            <div class="about-us__column">
                <h3 class="about-us__subtitle">Taon ng Panunungkulan</h3>
            </div>
            <div class="about-us__column">
                <h3 class="about-us__subtitle">Katungkulan</h3>
            </div>
            <div class="about-us__list">
                <?php foreach($alcaldezs as $alcaldez): ?>
                <ul class="about-us__list-wrapper">
                    <li class="about-us__column">
                        <span class="about-us__result"><?= $alcaldez['Alcaldez']['name'] ?></span>
                    </li>
                    <li class="about-us__column">
                        <span class="about-us__result"><?= $alcaldez['Alcaldez']['year_services'] ?></span>
                    </li>
                    <li class="about-us__column">
                        <span class="about-us__result"><?= $alcaldez['Alcaldez']['position'] ?></span>
                    </li>
                </ul>
                <?php endforeach; ?>
            </div>
        </article>
    </div>
</section>

<?= $this->element('gototop'); ?>