<footer id="contacts" >
	<div class="uk-container uk-container-center uk-text-center">
		<a href="#"><img src="<?=get_field('logo-footer',4)?>" alt=""></a>

		<address>
			<?=get_field('address',4)?>
		</address>

		<article>
			по поводу сотруднечества пишите мне на почту <a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a> <br>
			или звоните <a href="tel:<?=get_field('phone-1',4)?>"> <?=get_field('phone-1',4)?></a>
		</article>
	</div>
</footer>

</body>
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery-3.1.0.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideset.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/components/sticky.min.js"></script>
<!--<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});
</script>
<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
	VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>-->
</html>