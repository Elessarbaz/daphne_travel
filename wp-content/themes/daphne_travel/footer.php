
<footer>
	<div class="slogan-box">
		<p><?=get_field('slogan',4)?></p>
	</div>
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-4-10">
				<img class="logo" src="<?=get_field('logo-footer',4)?>">
				<p>
					Головной офис:
					<span class="address"><?=get_field('address',4)?>
					Тел./факс: <a href="tel:<?=get_field('phone-1',4)?>" class="fax-number"><?=get_field('phone-1',4)?></a> <br>
					Моб.: <a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
					E-mail: <a href="mailto:<?=get_field('email-1',4)?>"><?=get_field('email-1',4)?></a> | <a href="mailto:<?=get_field('email-2',4)?>"><?=get_field('email-2',4)?></a> <br>
					WEB: <a target="_blank" href="http://<?=get_field('url-1',4)?>"><?=get_field('url-1',4)?></a> | <a href="http://<?=get_field('url-2',4)?>"><?=get_field('url-2',4)?></a> <br>
				</p>
				<p>
					<?=get_field('raspisanie',4);?>
				</p>
			</div>
			<div class="uk-width-medium-6-10">
				<?=get_field('map',4)?>
			</div>
		</div>
	</div>
</footer>

<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/app.js"></script>
</body>
</html>