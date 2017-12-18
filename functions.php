<?php
/**
 * Add your custom PHP code here
 * @package storefront-sassy-child
 */

$GLOBALS['oficina_admin'] = is_user_logged_in() && current_user_can( 'create_posts' );

/** Add oficina class to body */
add_filter( 'body_class', function( $classes ) {
	return array_merge( $classes, [ 'oficina' ] );
} );

require 'inc/tweaks.php';
require 'inc/template-tags.php';

require 'inc/header.php';
require 'inc/footer.php';
