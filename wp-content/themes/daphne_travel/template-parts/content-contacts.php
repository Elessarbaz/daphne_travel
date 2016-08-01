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
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
			<img src="<?php bloginfo('template_directory') ?>/public/img/64/Kazakhstan.png" alt="">
			<h3>Казахстан</h3>
			<address>
				<p>Адрес: Казастан, г. Алматы</p>
				<p>Телефон: <a href="">8 (727) 777 77 77</a></p>
				<p>Email: <a href="">example@example.com</a></p>
			</address>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
			<img src="<?php bloginfo('template_directory') ?>/public/img/64/Turkey.png" alt="">
			<h3>Турция</h3>
			<address>
				<p>Адрес: Турция, г. Стамбул</p>
				<p>Телефон: <a href="">8 (727) 777 77 77</a></p>
				<p>Email: <a href="">example@example.com</a></p>
			</address>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->