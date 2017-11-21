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
$h_vid = rnd_post_from_cat( 'H-VIDEO' );
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img class="home-posts-bg" src="<?php echo get_stylesheet_directory_uri() ?>/assets/body_image.png">
			<?php rnd_post_img_from_cat( 'H-OVER1' ) ?>
			<?php rnd_post_img_from_cat( 'H-OVER2' ) ?>
			<?php rnd_post_img_from_cat( 'H-OVER3' ) ?>

			<div class="home-posts-wrap">
				<?php rnd_post_img_from_cat( 'H-PEOPLE' ) ?>
				<?php rnd_post_xrt_from_cat( 'H-TEXT1' ); ?>
				<?php rnd_post_img_from_cat( 'H-DRINKS' ) ?>
				<?php rnd_post_img_from_cat( 'H-FOOD1' ) ?>
				<?php rnd_post_img_from_cat( 'H-FOOD2' ) ?>
				<article class="post-vid-wrap">
					<div class="post-vid">
						<?php echo $h_vid ? apply_filters( 'the_content', $h_vid[0]->post_content ) : '' ?>
					</div>
				</article>

				<?php rnd_post_img_from_cat( 'PLACE1' ) ?>

				<?php rnd_post_xrt_from_cat( 'H-TEXT2' ); ?>

				<article class="sidebar-NR1">
					<div class="white-bg"><?php dynamic_sidebar( 'NR1' ); ?></div>
				</article>
				<?php rnd_post_img_from_cat( 'H-PICS1' ) ?>

				<article class="sidebar-NR2">
					<div class="white-bg"><?php dynamic_sidebar( 'NR2' ); ?></div>
				</article>
				<?php rnd_post_img_from_cat( 'PLACE2' ) ?>
				<?php rnd_post_img_from_cat( 'PEOPLE' ) ?>
				<?php rnd_post_img_from_cat( 'PEOPLE' ) ?>
				<?php rnd_post_xrt_from_cat( 'H-TEXT3' ); ?>
				<article class="sidebar-NR3">
					<div class="white-bg">
						<?php dynamic_sidebar( 'NR3' ); ?>
					</div>
				</article>
				<?php rnd_post_img_from_cat( 'H-PICS2' ) ?>
				<?php //rnd_post_img_from_cat( 'FOOD' ) ?>
				<?php rnd_post_img_from_cat( 'PRESS' ) ?>
			</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
