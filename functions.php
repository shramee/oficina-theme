<?php
/**
 * Add your custom PHP code here
 * @package storefront-sassy-child
 */

/** Add oficina class to body */
add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, [ 'oficina' ] );
} );

remove_action( 'wp_footer', 'fsb_display_image' );

require 'inc/header.php';
require 'inc/footer.php';

/** Register our sidebars and widgetized areas. */
function oficina_widget_areas() {
	register_sidebar( array( 'name' => 'NR1', 'id' => 'NR1', ) );
	register_sidebar( array( 'name' => 'NR2', 'id' => 'NR2', ) );
	register_sidebar( array( 'name' => 'NR3', 'id' => 'NR3', ) );
}

add_action( 'widgets_init', 'oficina_widget_areas' );

function rnd_post_from_cat( $cat ) {
	return get_posts( array(
		'orderby'        => 'rand',
		'category_name'  => $cat,
		'posts_per_page' => 1
	) );
}

function rnd_post_img_from_cat( $cat ) {
	/** @var WP_Post $post */
	$post = rnd_post_from_cat( $cat );

	if ( $post ) {
		$bg = get_the_post_thumbnail_url( $post[0]->ID, 'medium_large' );
		$bg = "background-image:url('$bg');";
		echo "<div class='cat-image $cat-image' style=\"$bg\"><span>$cat</span></div>";
	} else {
		echo "<div class='cat-image $cat-image'><span>$cat</span></div>";
	}
}
