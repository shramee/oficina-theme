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
