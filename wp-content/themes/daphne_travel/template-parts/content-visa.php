<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<h2>Визы</h2>
	</div>
</div>
<!--КОНЕЦ main-section-->
<div id="modal-visa" class="uk-modal custom-visa">
	<div class="uk-modal-dialog">
		<a class="uk-modal-close uk-close"></a>
		<form class="blink-mailer">
			<h3>Свяжитесь с нами для получения <br> подробной информации</h3>
			<input name="title" type="hidden" value="Обратная связь 'Заказ визы'">
			<input id="country" name="Страна" type="hidden">
			<input placeholder="Имя" name="Имя" type="text">
			<input placeholder="Email" name="Email" type="email">
			<input placeholder="Телефон" name="Телефон" type="tel">
			<input type="submit" value="Отправить">
		</form>
	</div>
</div>
<!--НАЧАЛО about-->
<div class="about tour-catalog uk-container uk-container-center">
	<div class="uk-grid">
		<?php foreach (pp_gallery_get() as $image): ?>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5">
			<img src="<?=$image->url?>" alt="">
			<h3><a href="#modal-visa" data-country="<?=$image->description?>" class="link-visa" data-uk-modal><?=$image->description?></a></h3>
		</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->