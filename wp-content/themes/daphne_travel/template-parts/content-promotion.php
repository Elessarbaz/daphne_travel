<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url(4)?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<h2>Специальные предложения</h2>
	</div>
</div>
<!--КОНЕЦ main-section-->

<!--НАЧАЛО about-->
<div class="about uk-container uk-container-center">
	<div class="block-services">
		<?php $posts=get_post(array('category_name'=>'promotion'));
		foreach ($posts as $post): setup_postdata($post);
		?>
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<img src="<?=get_the_post_thumbnail_url()?>" width="" height="" alt="">
					<figcaption class="uk-visible-large uk-overlay-panel uk-overlay-background uk-overlay-slide-right">
						<form class="blink-mailer">
							<h3>Свяжитесь с нами для получения <br> подробной информации</h3>
							<input name="title" type="hidden" value="Обратная связь 'Заказ тура' '<?=get_the_title()?>' ">
							<input id="country" name="Страна" type="hidden">
							<input placeholder="Имя" name="Имя" type="text">
							<input placeholder="Email" name="Email" type="email">
							<input placeholder="Телефон" name="Телефон" type="tel">
							<input type="submit" value="Отправить">
						</form>
					</figcaption>
				</figure>
				<div id="modal-service" class="uk-modal">
					<div class="uk-modal-dialog">
						<a class="uk-modal-close uk-close"></a>
						<form action="">
							<h3>Свяжитесь с нами для получения <br> подробной информации</h3>
							<input placeholder="Имя" type="text">
							<input placeholder="Email" type="email">
							<input placeholder="Телефон" type="tel">
							<input type="submit" value="Отправить">
						</form>
					</div>
				</div>
				<button class="uk-button uk-hidden-large" data-uk-modal="{target:'#modal-service'}">Узнать подробнее?</button>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
				<h3>Название предложения</h3>
				<article>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at corporis cupiditate dolore, earum
						fugit hic, ipsa ipsum laborum magni necessitatibus, nisi odio pariatur quas quis repellat tempora totam
						unde.
					</div>
					<div>Beatae, doloribus, libero. Ad adipisci beatae commodi consequuntur distinctio dolore, ea exercitationem
						expedita laboriosam maxime, modi molestias non nulla numquam obcaecati officiis pariatur perferendis
						quibusdam quis quod, totam voluptatibus voluptatum.
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut est quaerat repellat repudiandae
						sed tempora temporibus totam veritatis vero. Asperiores, aspernatur dicta necessitatibus pariatur provident
						temporibus totam ullam voluptas.
					</div>
				</article>

			</div>
		</div>
		<?php endforeach; ?>


	</div>
	<div class="block-services">
		<div class="uk-grid">
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
				<h3>Название предложения</h3>
				<article>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at corporis cupiditate dolore, earum
						fugit hic, ipsa ipsum laborum magni necessitatibus, nisi odio pariatur quas quis repellat tempora totam
						unde.
					</div>
					<div>Beatae, doloribus, libero. Ad adipisci beatae commodi consequuntur distinctio dolore, ea exercitationem
						expedita laboriosam maxime, modi molestias non nulla numquam obcaecati officiis pariatur perferendis
						quibusdam quis quod, totam voluptatibus voluptatum.
					</div>
					<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut est quaerat repellat repudiandae
						sed tempora temporibus totam veritatis vero. Asperiores, aspernatur dicta necessitatibus pariatur provident
						temporibus totam ullam voluptas.
					</div>
				</article>
			</div>
			<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
				<figure class="uk-overlay uk-overlay-hover">
					<img src="img/form-img.jpg" width="" height="" alt="">
					<figcaption class="uk-visible-large uk-overlay-panel uk-overlay-background uk-overlay-slide-right">
						<form action="">
							<h3>Свяжитесь с нами для получения <br> подробной информации</h3>
							<input placeholder="Имя" type="text">
							<input placeholder="Email" type="email">
							<input placeholder="Телефон" type="tel">
							<input type="submit" value="Отправить">
						</form>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->