
<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<h2><?=get_the_title()?></h2>
	</div>
</div>
<!--КОНЕЦ main-section-->

<!--НАЧАЛО about-->
<div class="about uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1 uk-text-left">
			<article>
				<?php the_content() ?>
			</article>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->

<!--НАЧАЛО form-->
<div class="form-about">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1 form-background ">

			<form class="blink-mailer uk-container uk-container-center uk-text-center uk-flex uk-flex-center uk-flex-middle uk-flex-column" action="">
				<h3>Свяжитесь с нами для получения <br> подробной информации</h3>
				<input name="title" type="hidden" value="Обратная связь">
				<input name="Название визы" type="hidden" value="<?=get_the_title()?>">
				<input placeholder="Имя" name="Имя" type="text">
				<input placeholder="Email" name="Email" type="email">
				<input placeholder="Телефон" name="Телефон" type="tel">
				<input type="submit" value="Отправить">
			</form>
		</div>
	</div>
</div>
<!--КОНЕЦ form-->