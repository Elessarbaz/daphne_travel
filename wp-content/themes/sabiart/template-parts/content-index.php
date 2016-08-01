
	<main>
		<div id="home" class="main-block">
			<div class="uk-container uk-container-center">
				<div class="uk-grid  uk-position-relative">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
						<img src="<?=get_the_post_thumbnail_url()?>" alt="Main-photo">
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
					</div>
					<img class="main-image" src="<?=get_field('main-image',4)?>" alt="">
				</div>
			</div>
		</div>

		<div id="about" class="about">
			<div class="uk-container uk-container-center uk-text-center">
				<?php $post=get_post(16); setup_postdata($post); ?>
				<div class="title-about">
					<figure></figure>
					<h2><?=get_the_title()?></h2>
					<figure></figure>
				</div>
				<div class="img-avatar"></div>
				<article>
					<?php the_content(); ?>
				</article>
				<article>
					<?=get_field('excerpt',4) ?>
				</article>
				<div class="icon-block">
					<a target="_blank" href="<?=get_field('instagram',4)?>"><i class="uk-icon uk-icon-instagram"></i></a>
					<a target="_blank" href="<?=get_field('facebook',4)?>"><i class="uk-icon uk-icon-facebook"></i></a>
					<a target="_blank" href="<?=get_field('pinterest-p',4)?>"><i class="uk-icon uk-icon-pinterest-p"></i></a>
				</div>
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-2.png" alt="">
			</div>
			<?php wp_reset_query(); ?>
		</div>

		<div id="hobbies" class="hobbies">
			<?php $post=get_post(24); setup_postdata($post); ?>
			<div class="uk-container uk-container-center uk-text-center">
				<div class="title-about">
					<figure></figure>
					<h2>Хобби</h2>
					<figure></figure>
				</div>
				<div class="uk-grid">
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-5 uk-position-relative">
						<article>
							<?php the_content() ?>
						</article>
						<img  class="uk-visible-large goldlline" src="<?php bloginfo('template_directory') ?>/public/img/gold-hernya.png" alt="">
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5">
						<?php $gallery=pp_gallery_get();
						?>
						<div class="uk-grid hobbbies-grid">
							<?php for ($i=count($gallery)-1; $i>count($gallery)-4;$i--): ?>
							<div class="uk-width-small-1-3 uk-width-medium-1-3 uk-width-large-1-1">
								<a href="<?=$gallery[$i]->url?>" data-uk-lightbox="{group:'hobbies'}"><img src="<?=$gallery[$i]->url?>" alt=""></a>
							</div>
							<?php endfor; ?>
						</div>
					</div>
					<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-2-5">
						<a href="<?=get_the_post_thumbnail_url()?>" data-uk-lightbox="{group:'hobbies'}"><div class="main-hobbies"></div></a>
					</div>
					<div class="uk-width-1-1 uk-flex uk-flex-center uk-flex-middle">
						<div class="title-hobbies">
							<?php the_excerpt() ?>
						</div>
					</div>
				</div>
			</div>
			<?php wp_reset_query() ?>
		</div>

		<div id="portfolio" class="portfolio">
			<?php $post=get_post(31); setup_postdata($post); ?>
			<div class="uk-container uk-container-center">
				<div class="title-about">
					<figure></figure>
					<h2><?=get_the_title()?></h2>
					<figure></figure>
				</div>
				<div data-uk-slideset="{small: 1, medium: 2, large: 3}">
					<div class="uk-slidenav-position">
						<ul class="uk-grid uk-slideset">
							<?php foreach (pp_gallery_get() as $image): ?>
							<li>
								<a href="<?=$image->url?>" data-uk-lightbox="{group:'port'}"><img src="<?=$image->url?>" alt=""></a>
							</li>
							<?php endforeach; ?>
						</ul>
						<ul class=" uk-hidden-large uk-slideset-nav uk-dotnav uk-flex-center"></ul>
						<a href="" class=" uk-hidden-small uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
						<a href="" class=" uk-hidden-small uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
					</div>
				</div>
				<?php wp_reset_query(); ?>
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-2.png" alt="">
				<div class="uk-slidenav-position" data-uk-slideshow>
					<ul class="uk-slideshow">
						<?php $gallery=pp_gallery_get(33); $count=count($gallery);
						for ($i=0;$i<$count-1; $i+=3):
						?>
						<li>
							<div class="uk-grid">
								<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
									<a href="<?=$gallery[$i]->url?>" data-uk-lightbox="{group:'port'}"><div class="small-slider-image" style="background-image: url('<?=$gallery[$i]->url?>')"></div></a>
									<a href="<?=$gallery[$i+1]->url?>" data-uk-lightbox="{group:'port'}"><div class="small-slider-image" style="background-image: url('<?=$gallery[$i+1]->url?>')"></div></a>
								</div>
								<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2 no-padding">
									<a href="<?=$gallery[$i+2]->url?>" data-uk-lightbox="{group:'port'}"><div class="big-slider-image" style="background-image: url('<?=$gallery[$i+2]->url?>')"></div></a>
								</div>
							</div>
						</li>
						<?php endfor; ?>
					</ul>
					<ul class="uk-dotnav uk-dotnav-contrast uk-flex-center">
						<?php $c=0; for ($i=0;$i<$count-1; $i+=3):
						?>
						<li data-uk-slideshow-item="<?=$c?>"><a href=""></a></li>
						<?php $c++; endfor; ?>
					</ul>
					<a href="" class="  uk-hidden-small uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
					<a href="" class=" uk-hidden-small uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				</div>
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-2.png" alt="">
				<div class="uk-slidenav-position" data-uk-slideshow>
					<ul class="uk-slideshow">
						<?php $gallery=pp_gallery_get(35); $count=count($gallery);
						for ($i=0;$i<$count-1; $i+=3):
						?>
						<li>
							<div class="uk-grid">
								<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
									<a href="<?=$gallery[$i]->url?>" data-uk-lightbox="{group:'port'}">
										<div class="big-slider-image" style="background-image: url('<?=$gallery[$i]->url?>')"></div></a>
								</div>
								<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2  no-padding">
									<a href="<?=$gallery[$i+1]->url?>" data-uk-lightbox="{group:'port'}"><div class="small-slider-image" style="background-image: url('<?=$gallery[$i+1]->url?>')"></div></a>
									<a href="<?=$gallery[$i+2]->url?>" data-uk-lightbox="{group:'port'}"><div class="small-slider-image" style="background-image: url('<?=$gallery[$i+2]->url?>')"></div></a>
								</div>
							</div>
						</li>
						<?php endfor; ?>
					</ul>
					<ul class="uk-dotnav uk-dotnav-contrast uk-flex-center">
						<?php $c=0; for ($i=0;$i<$count-1; $i+=3):
						?>
						<li data-uk-slideshow-item="<?=$c?>"><a href=""></a></li>
						<?php $c++; endfor; ?>
					</ul>
					<a href="" class="uk-hidden-small uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
					<a href="" class="uk-hidden-small uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
				</div>
			</div>
		</div>
		<?php wp_reset_query(); ?>
		</div>

		<div id="quote" class="text">
			<div class="uk-container uk-container-center uk-text-center">
				<div class="title-about">
					<figure></figure>
					<h2>Умная фраза</h2>
					<figure></figure>
				</div>
				<?php $post=get_posts(array('category_name'=>'frazy','nuberposts'=>1,'orderby'=>'rand')); $post=$post[0];
				setup_postdata($post);
				?>
				<article class="uk-text-center">
					<span>&#8220;</span>
					<br>
					<?php the_content(); ?>
					<br>
					<span>&#8222;</span>
					<p class="uk-text-right">
						<?=get_the_excerpt() ?> <img src="<?php bloginfo('template_directory') ?>/public/img/gold-hernya.png" alt="">
					</p>
				</article>
				<img src="<?php bloginfo('template_directory') ?>/public/img/shadow-2.png" alt="">
			</div>
		</div>

		<form class="uk-container uk-container-center blink-mailer">
			<h3 class="uk-text-center">Напишите мне</h3>
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<input type="text" placeholder="Имя" name="Имя">
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<input type="tel" placeholder="Телефон" name="Телефон">
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<input type="email" placeholder="Email" name="Email">
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-4">
					<input type="submit" value="Отправить">
				</div>
			</div>
			<div class="icon-block">
				<a target="_blank" href="<?=get_field('instagram',4)?>"><i class="uk-icon uk-icon-instagram"></i></a>
				<a target="_blank" href="<?=get_field('facebook',4)?>"><i class="uk-icon uk-icon-facebook"></i></a>
				<a target="_blank" href="<?=get_field('pinterest-p',4)?>"><i class="uk-icon uk-icon-pinterest-p"></i></a>
			</div>
		</form>
	</main>