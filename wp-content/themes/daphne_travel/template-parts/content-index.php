<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<?php the_content() ?>
	</div>
</div>
<!--КОНЕЦ main-section-->

<!--НАЧАЛО advantages-->
<div class="advantages">
	<div class="uk-container uk-container-center">
		<h2>Наши приемущества</h2>
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-photocamera.png">
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-large uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
					<?php $posts=get_posts(array('category_name'=>'advantages','numberposts'=>-1));
					foreach ($posts as $post): setup_postdata($post);
					?>
					<li>
						<div>
							<img src="<?=get_the_post_thumbnail_url()?>">
							<h3><?=get_the_title()?></h3>
							<p>
								<?php the_content()?>
							</p>
						</div>
					</li>
					<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
		</div>
	</div>
</div>
<!--КОНЕЦ advantages-->

<!--НАЧАЛО about-->
<?php $post=get_post(25); setup_postdata($post); ?>
<div class="about uk-container uk-container-center">
	<h2><?=get_the_title()?></h2>
	<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-photos.png">
	<div class="uk-grid">
		<div class="uk-width-medium-1-3">
			<img src="<?=get_the_post_thumbnail_url()?>">
		</div>
		<div class="uk-width-medium-2-3">
			<article>
			<?php the_content() ?>
			</article>
		</div>
	</div>
	<?php wp_reset_query(); ?>
</div>
<!--КОНЕЦ about-->

<!--НАЧАЛО promotions-->
<?php $post=get_post(37); setup_postdata($post); ?>
<div class="promotions">
	<style>
		@media (min-width: 768px) {
			.promotions {
				text-align: left;
				background: linear-gradient(115deg, white 0%, white 40%, transparent 40%, transparent 100%), 50% 50%/cover url('<?=get_the_post_thumbnail_url()?>'); } }
	</style>
	<div class="uk-container uk-container-center">
		<div class="content-box">
			<h2><?=get_the_title()?></h2>
			<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-maleta.png">
			<article>
				<?php the_content() ?>
			</article>
			<a href="#" class="btn">Подробнее</a>
		</div>
	</div>
	<?php wp_reset_query(); ?>
</div>
<!--КОНЕЦ promotions-->

<!--НАЧАЛО reviews-->
<div class="reviews">
	<div class="uk-container uk-container-center">
		<h2>Отзывы</h2>
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-glasses.png">
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-1-1">
					<?php $posts=get_posts(array('category_name'=>'reviews','numberposts'=>-1));
					foreach ($posts as $post): setup_postdata($post);
					?>
					<li>
						<div>
							<h3><?=get_the_title()?></h3>
							<p>
								<?php the_content()?>
							</p>
						</div>
					</li>
					<?php endforeach; wp_reset_query(); ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>
		</div>
	</div>
</div>
<!--КОНЕЦ reviews-->