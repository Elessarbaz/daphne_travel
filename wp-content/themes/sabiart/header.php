<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Sabiart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/dotnav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/app.css">
</head>
<body>

<header>
	<div class="uk-container uk-container-center">
		<div class="uk-grid nav-menu " data-uk-sticky="{getWidthFrom: top:-200, animation: 'uk-animation-slide-top'}">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-5 uk-flex uk-flex-middle uk-position-relative uk-visible-large" >
				<nav class="uk-navbar nav-menu">
					<ul class="uk-navbar-nav uk-flex uk-flex-center uk-flex-space-around uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<li class="uk-active"><a href="#home" data-uk-smooth-scroll="{offset: 70}">Главная</a></li>
						<li><a href="#about" data-uk-smooth-scroll="{offset: 70}">Обо мне</a></li>
						<li><a href="#hobbies" data-uk-smooth-scroll="{offset: 70}">Хобби</a></li>
					</ul>
					<img class="shadow-line" src="<?php bloginfo('template_directory') ?>/public/img/shadow.png" alt="">
				</nav>
			</div>
			<div class="nav-logo uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5 uk-text-center">
				<img src="<?=get_field('logo',4)?>" alt="Logo">
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-5 uk-flex uk-flex-middle uk-position-relative uk-visible-large">
				<nav class="uk-navbar nav-menu">
					<ul class="uk-navbar-nav uk-flex uk-flex-center uk-flex-space-around uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<li><a href="#portfolio" data-uk-smooth-scroll="{offset: 70}">Портфолио</a></li>
						<li><a href="#quote" data-uk-smooth-scroll="{offset: 70}">Цитата</a></li>
						<li><a href="#contacts" data-uk-smooth-scroll="{offset: 70}">Контакты</a></li>
					</ul>
					<img class="shadow-line" src="<?php bloginfo('template_directory') ?>/public/img/shadow.png" alt="">
				</nav>
			</div>
			<a href="#offcanvas-navbar" class="uk-navbar-toggle uk-visible-small" data-uk-sticky="{getWidthFrom: top:-100, animation: 'uk-animation-slide-top'}"  data-uk-offcanvas></a>

			<div id="offcanvas-navbar" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5 uk-text-center offcanvas-logo">
						<img src="public/img/logo.png" alt="Logo">
					</div>
					<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<li class="uk-active"><a href="#home">Главная</a></li>
						<li><a href="#about">Обо мне</a></li>
						<li><a href="#hobbies">Хобби</a></li>
						<li><a href="#portfolio">Портфолио</a></li>
						<li><a href="#quote">Цитата</a></li>
						<li><a href="#contacts">Контакты</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</header>