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

$allPosts = wp_get_recent_posts();


?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="demo-posts-wrap">
				<?php
				foreach ( $allPosts as $post ){
//					echo "<h3>$post[post_title]</h3>";
					echo get_the_post_thumbnail( $post['ID'] );
				}
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'storefront_sidebar' );
get_footer();
