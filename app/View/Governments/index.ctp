<section class="newsletter">
	<div class="container">
		<h2 class="newsletter__center">Peñaranda Government Officials</h2>
	</div>
</section>

<div class="government">
    <div class="container">
        <div class="government__position">
            <h2>Mayor</h2>
        </div>
        <?php foreach($governments as $government): ?>
        <?php if($government['Government']['position'] === "Mayor"): ?>
        <div class="government__officials">
            <div class="government__officials-image">
                <img src="<?= $government['Government']['image'] ?>" alt="government-officials" class="government__image">
            </div>
            <div class="government__officials-information">
                <div class="government__officials-description">
                    <label class="government__officials-label">Name:</label>
                    <label class="government__officials-span"><?= $government['Government']['name'] ?></label>
                </div>
                <div class="government__officials-description">
                    <label class="government__officials-label">Birthday:</label>
                    <label class="government__officials-span"><?= $government['Government']['birthday'] ?></label>
                </div>
                <div class="government__officials-description">
                    <label class="government__officials-label">Message:</label>
                    <label class="government__officials-span"><?= $government['Government']['message'] ?></label>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <div class="government__position">
            <h2>Vice Mayor</h2>
        </div>
        <?php foreach($governments as $government): ?>
        <?php if($government['Government']['position'] === "Vice Mayor"): ?>
        <div class="government__officials">
            <div class="government__officials-image">
                <img src="<?= $government['Government']['image'] ?>" alt="government-officials" class="government__image">
            </div>
            <div class="government__officials-information">
                <div class="government__officials-description">
                    <label class="government__officials-label">Name:</label>
                    <label class="government__officials-span"><?= $government['Government']['name'] ?></label>
                </div>
                <div class="government__officials-description">
                    <label class="government__officials-label">Birthday:</label>
                    <label class="government__officials-span"><?= $government['Government']['birthday'] ?></label>
                </div>
                <div class="government__officials-description">
                    <label class="government__officials-label">Message:</label>
                    <label class="government__officials-span"><?= $government['Government']['message'] ?></label>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <div class="government__position">
            <h2>Councilor</h2>
        </div>
        <?php foreach($governments as $government): ?>
        <?php if($government['Government']['position'] === "Councilor"): ?>
        <div class="government__officials-multiple">
            <div class="government__officials government__officials--multiple">
                <div class="government__officials-image">
                    <img src="<?= $government['Government']['image'] ?>" alt="government-officials" class="government__image">
                </div>
                <div class="government__officials-information">
                    <div class="government__officials-description">
                        <label class="government__officials-label">Name:</label>
                        <label class="government__officials-span"><?= $government['Government']['name'] ?></label>
                    </div>
                    <div class="government__officials-description">
                        <label class="government__officials-label">Birthday:</label>
                        <label class="government__officials-span"><?= $government['Government']['birthday'] ?></label>
                    </div>
                    <div class="government__officials-description">
                        <label class="government__officials-label">Message:</label>
                        <label class="government__officials-span"><?= $government['Government']['message'] ?></label>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

        <div class="government__position">
            <h2>Barangay Captain</h2>
        </div>
        <?php foreach($governments as $government): ?>
        <?php if($government['Government']['position'] === "Barangay Captain"): ?>
        <div class="government__officials-multiple">
            <div class="government__officials government__officials--multiple">
                <div class="government__officials-image">
                    <img src="<?= $government['Government']['image'] ?>" alt="government-officials" class="government__image">
                </div>
                <div class="government__officials-information">
                    <div class="government__officials-description">
                        <label class="government__officials-label">Name:</label>
                        <label class="government__officials-span"><?= $government['Government']['name'] ?></label>
                    </div>
                    <div class="government__officials-description">
                        <label class="government__officials-label">Birthday:</label>
                        <label class="government__officials-span"><?= $government['Government']['birthday'] ?></label>
                    </div>
                    <div class="government__officials-description">
                        <label class="government__officials-label">Message:</label>
                        <label class="government__officials-span"><?= $government['Government']['message'] ?></label>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>