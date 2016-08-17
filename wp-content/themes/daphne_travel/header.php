<?php $obj=get_queried_object(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.min.css">
</head>
<body>

<header id="home">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
		<div class="uk-slidenav-position uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5" data-uk-slideshow="{autoplay: true}">
			<ul class="uk-slideshow">
				<li id="KZ" class="uk-active" >
					<a href="/"><div class="header__logo" style="background-image: url('<?=get_field('logo-ru',4)?>')" ></div></a>
				</li>
				<li id="TR">
					<a href="/"><div class="header__logo" style="background-image: url('<?=get_field('logo-tr',4)?>')" ></div></a>
				</li>
				<li id="US">
					<a href="/"><div class="header__logo" style="background-image: url('<?=get_field('logo-en',4)?>')" ></div></a>
				</li>
			</ul>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 navbar-and-contacts-col">
			<div class="contacts">
				<span><a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a></span>
				<span><a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a></span>
				<span><a href="mailto:<?=get_field('email-1',4)?>"><?=get_field('email-1',4)?></a></span>
				<span><a href="mailto:<?=get_field('email-2',4)?>"><?=get_field('email-2',4)?></a></span>
			</div>

			<nav class="uk-navbar"
				 data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$value):?>
					<li <?php if ($obj->ID==$value->object_id&&($obj->post_type==$value->object||$obj->taxonomy==$value->object)) echo 'class="uk-active"';?>><a href="<?=$value->url?>"><?=$value->title?></a></li>
					<?php endforeach; ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<?php $menu=wp_get_nav_menu_items('main');
						foreach ($menu as $key=>$value):?>
							<li <?php if ($obj->ID==$value->object_id&&($obj->post_type==$value->object||$obj->taxonomy==$value->object)) echo 'class="uk-active"';?>><a href="<?=$value->url?>"><?=$value->title?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</header>