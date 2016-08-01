<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daphne Travel | Главная</title>
	<link rel="stylesheet" href="css/uikit.min.css">
	<link rel="stylesheet" href="css/components/sticky.min.css">
	<link rel="stylesheet" href="css/components/slider.min.css">
	<link rel="stylesheet" href="css/components/slidenav.min.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header id="home">
	<div class="uk-container uk-container-center">
		<a href="index.html"><img src="img/logo.png" alt="Лого" class="header__logo"></a>
		<p class="language-switcher">
			<a href="" class="active">RU</a>
			<a href="">EN</a>
			<a href="">TR</a>
		</p>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<span><a href="tel:+7 727 291 71 71">+7 727 291 71 71</a></span>
				<span><a href="tel:+ 7 701 768 10 95">+ 7 701 768 10 95</a></span>
				<span><a href="mailto:daphne@daphne.kz">daphne@daphne.kz</a></span>
				<span><a href="mailto:bilet@daphne.kz">bilet@daphne.kz</a></span>
			</div>

			<nav class="uk-navbar"
				 data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small">
					<li class="uk-active"><a href="index.html">Главная</a></li>
					<li><a href="about.html">О нас</a></li>
					<li><a href="online-booking.html">Онлайн бронирование</a></li>
					<li><a href="promotions.html">Спецпредложения</a></li>
					<li><a href="visas.html">Визы</a></li>
					<li><a href="contacts.html">Контакты</a></li>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<li class="uk-active"><a href="index.html">Главная</a></li>
						<li><a href="about.html">О нас</a></li>
						<li><a href="online-booking.html">Онлайн бронирование</a></li>
						<li><a href="promotions.html">Спецпредложения</a></li>
						<li><a href="visas.html">Визы</a></li>
						<li><a href="contacts.html">Контакты</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</header>