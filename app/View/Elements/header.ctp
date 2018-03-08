<header class="header">
	<div class="container">
		<div class="header__branding">
			<a href="/" class="header__logo-link">	
				<h1 class="header__h1">
					<span class="header__highlight">Peñaranda</span> Website
				</h1>
			</a>
		</div>
		<div class="header__menu-container">
			<div class="header__menu-icon">
				<span class="header__menu-line"></span>
				<span class="header__menu-line"></span>
				<span class="header__menu-line"></span>
				<span class="header__menu-line"></span>
			</div>
		</div>
		<nav class="header__navigation">
			<ul>
				<li class="header__nav-list header__nav-list--current">
					<a class="header__link" href="/">Home</a>
				</li>
				<li class="header__nav-list"><a class="header__link" href="/government">Government</a></li>
				<li class="header__nav-list"><a class="header__link" href="/tourism">Tourism</a></li>
				<li class="header__nav-list"><a class="header__link" href="/services">Services</a></li>
				<li class="header__nav-list"><a class="header__link" href="/gallery">Gallery</a></li>
				<li class="header__nav-list"><a class="header__link" href="/about-us">About us</a></li>
			</ul>
		</nav>
	</div>
</header>
<script>
	$(document).ready(function(){
		$('.header__menu-icon').click(function(){
			$(this).toggleClass('header__menu-icon--active');
			$('.header__navigation').slideToggle();
		});
	});
</script>