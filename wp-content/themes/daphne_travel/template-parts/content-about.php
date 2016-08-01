<!--НАЧАЛО main-section-->

<?php
$obj=get_queried_object();
$childrens_temp = get_children( array(
	'post_parent' => 25,
	'post_type'   => 'page',
	'numberposts' => -1,
	'post_status' => 'publish'
) );
$childrens[]=get_post(25);
foreach ($childrens_temp as $post){
	$childrens[]=$post;
}
?>

<!--НАЧАЛО main-section-->
<div class="main-section" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
	<div class="content-area">
		<img class="heading-img" src="<?php bloginfo('template_directory') ?>/public/img/icon-plane.png">
		<h2><?=get_the_title(25)?></h2>
	</div>
</div>
<!--КОНЕЦ main-section-->

<!--НАЧАЛО about-->
<div class="about uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-5">
			<ul class="uk-nav about-menu">
				<?php foreach ($childrens as $item): ?>
				<li <?php if ($item->ID==$obj->ID) echo'class="uk-active"';?> ><a href="<?=get_permalink($item->ID)?>"><?=$item->post_title?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-4-5 uk-text-left">
			<article>
				<?php the_content() ?>
			</article>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->