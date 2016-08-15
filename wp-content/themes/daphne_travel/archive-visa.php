<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package daphne_travel
 */
$obj=get_queried_object();
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>$obj->slug,'posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page_num*$page_post;
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--НАЧАЛО main-section-->
			<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url(4)?>')">
				<div class="content-area">
					<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
					<h2><?=$obj->name?></h2>
				</div>
			</div>

			<div class="about tour-catalog uk-container uk-container-center">
				<div class="uk-grid">

					<?php
					query_posts(array('category_name'=>$obj->slug,'posts_per_page'=>$page_post,'offset'=>$offset));
					if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'archive-single-visa' );
						endwhile;
					endif; ?>

				</div>
				<?php if($page_count>1):?>
					<!--НАЧАЛО пагинация-->
					<ul class="uk-pagination">
						<li><a href="<?=$query_url?>?page=0"><i class="uk-icon-angle-double-left"></i></a></li>
						<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='class="uk-active"';} ?>
							<li data-id="<?=$i?>" data-id1="<?=$page_num?>" <?=$class?> >
								<span>
									<a href="<?=$query_url.'?page='.$i?>">
										<?=$i+1?>
									</a>
								</span>
							</li>
						<?php endfor; ?>
						<li><a href="<?=$query_url?>?page=<?=$page_count-1?>"><i class="uk-icon-angle-double-right"></i></a></li>
					</ul>
				<?php endif; ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
