<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header();
$h_txt1 = rnd_post_from_cat( 'H-TEXT1' );
$h_txt2 = rnd_post_from_cat( 'H-TEXT2' );
$h_txt3 = rnd_post_from_cat( 'H-TEXT3' );
$h_vid = rnd_post_from_cat( 'H-VIDEO' );
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content-wrap">
				<?php rnd_post_img_from_cat( 'H-OVER1' ) ?>
				<?php rnd_post_img_from_cat( 'H-PEOPLE' ) ?>
				<div class="post_content H-TEXT1">
					<?php echo $h_txt1 ? $h_txt1[0]->post_excerpt : '' ?>
				</div>
				<?php rnd_post_img_from_cat( 'H-DRINKS' ) ?>
				<?php rnd_post_img_from_cat( 'H-FOOD1' ) ?>
				<?php rnd_post_img_from_cat( 'H-FOOD2' ) ?>
				<?php rnd_post_img_from_cat( 'H-OVER2' ) ?>
				<?php rnd_post_img_from_cat( 'H-OVER3' ) ?>
				<div class="post_video">
					<?php echo $h_vid ? apply_filters( 'the_content', $h_vid[0]->post_content ) : '' ?>
				</div>
				<div class="post_content H-TEXT2">
					<?php echo $h_txt2 ? $h_txt2[0]->post_excerpt : '' ?>
				</div>
				<?php dynamic_sidebar( 'NR1' ); ?>
				<?php dynamic_sidebar( 'NR2' ); ?>
				<?php rnd_post_img_from_cat( 'H-PICS1' ) ?>
				<?php rnd_post_img_from_cat( 'PLACE1' ) ?>
				<?php rnd_post_img_from_cat( 'PLACE2' ) ?>
				<?php rnd_post_img_from_cat( 'PEOPLE' ) ?>
				<?php rnd_post_img_from_cat( 'PEOPLE' ) ?>
				<div class="post_content H-TEXT3">
					<?php echo $h_txt3 ? $h_txt3[0]->post_excerpt : '' ?>
				</div>
				<?php dynamic_sidebar( 'NR3' ); ?>
				<?php rnd_post_img_from_cat( 'H-PICS2' ) ?>
				<?php rnd_post_img_from_cat( 'FOOD' ) ?>
				<?php rnd_post_img_from_cat( 'PRESS' ) ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
