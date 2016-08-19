<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<h2><?=get_the_title()?></h2>
	</div>
</div>
<!--КОНЕЦ main-section-->

<div class="map">
	<?=get_field('map',4)?>
</div>

<!--НАЧАЛО about-->
<div class="about contacts tour-catalog uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
			<img src="<?php bloginfo('template_directory') ?>/public/img/64/Kazakhstan.png" alt="">
			<h3>Казахстан</h3>
			<address>
				<p>Адрес: <?=get_field('address',4) ?></p>
				<p>Телефон: <a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a></p>
				<p>Email: <a href="mailto:<?=get_field('email-1',4)?>"><?=get_field('email-1',4)?></a></p>
			</address>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
			<img src="<?php bloginfo('template_directory') ?>/public/img/64/Turkey.png" alt="">
			<h3>Турция</h3>
			<address>
				<p>Адрес: <?=get_field('address-turke',4)?></p>
				<p>Телефон: <a href="tel:<?=get_field('phone-turke',4)?>"><?=get_field('phone-turke',4)?></a></p>
				<p>Email: <a href="mailto:<?=get_field('email-turke',4)?>"><?=get_field('email-turke',4)?></a></p>
			</address>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-3">
			<img src="<?php bloginfo('template_directory') ?>/public/img/64/Turkey.png" alt="">
			<h3>Турция</h3>
			<address>
				<p>Адрес: <?=get_field('address-antaliya',4)?></p>
				<p>Телефон: <a href="tel:<?=get_field('phone1-antaliya',4)?>"><?=get_field('phone1-antaliya',4)?></a></p>
				<p>Факс: <a href="tel:<?=get_field('phone1-antaliya',4)?>"><?=get_field('phone1-antaliya',4)?></a></p>
				<p>Email: <a href="mailto:<?=get_field('email-antaliya',4)?>"><?=get_field('email-antaliya',4)?></a></p>
				<p>Сайт: <a href="mailto:<?=get_field('site-antaliya',4)?>"><?=get_field('site-antaliya',4)?></a></p>
			</address>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->