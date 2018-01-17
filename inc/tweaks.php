<?php
add_action( 'after_setup_theme', 'oficina_theme_setup' );
function oficina_theme_setup() {
	$pd = 30; //Pixel density
	add_image_size( 'home1', 8 * $pd, 5 * $pd, true );
	add_image_size( 'home2', 8 * $pd, 7 * $pd, true );
	add_image_size( 'home3', 7 * $pd, 9 * $pd, true );
}