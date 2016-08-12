
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
<script src="<?php bloginfo('template_directory') ?>/public/js/widget-core.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/app.js"></script>
<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('.blink-mailer h3').html(success); }, function(error) {});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>

<script>
	$('a[data-country]').click(function () {
		var country=$(this).data('country');
		$("#country").val(country);
	});
</script>
<script>
	var country='';
	$(document).ready(function () {

		<?php
		global $geodata;
		?>
		country ='<?=$geodata->countryCode?>';

		/*switch (country){
			case 'ru' : lng='ru-RU';
				break;
			case 'en' : lng='en-US';
				break;
			case 'tr' : lng='tr-TR';
				break;
		}*/
		var logo = $('#'+country);
		console.log(logo.length);
		if (!logo.length){
			$('#KZ').addClass('uk-active');
		}
		else {
			logo.addClass('uk-active');
		}

	});
</script>
<?=get_field('google',4) ?>
<?=get_field('yandex',4) ?>
<?php wp_footer(); ?>
</body>
</html>