<?php

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

/**
 * Gets random post from category
 * @param string $cat
 * @param string $classes
 */
function rnd_post_img_from_cat( $cat, $size = 'medium_large', $link = null ) {
	/** @var WP_Post $post */
	$post = rnd_post_from_cat( $cat );

	if ( $post ) {
		echo "<article class='post-img-wrap $cat'>";
		if ( $link ) {
			echo "<a href='$link'>";
		}
		if ( ! $size ) $size = 'medium_large';
		echo get_the_post_thumbnail( $post[0]->ID, $size );
		echo isset( $_GET['testing'] ) ? "<span class='dbg-center'>$cat</span>" : '';
		if ( $link ) {
			echo "</a>";
		}
		echo '</article>';
	} else if ( $GLOBALS['oficina_admin'] ) {
		echo "<article class='no-cat-image $cat-image'><span>No post found for <b>$cat</b></span></article>";
	}
}

/**
 * Gets random post from category
 * @param string $cat
 * @param string $classes
 */
function rnd_post_xrt_from_cat( $cat, $classes = '' ) {
	/** @var WP_Post $post */
	$post = rnd_post_from_cat( $cat );

	if ( $post ) {
		echo "<article class='post-xrt-wrap $cat $classes'><div class='white-bg'><p>";
		echo $post[0]->post_excerpt ? $post[0]->post_excerpt : $post[0]->post_content;
		echo '</p></div></article>';
	} else if ( $GLOBALS['oficina_admin'] ) {
		echo "<article class='cat-xrt $cat-image $classes'><span>No post found for <b>$cat</b></span></article>";
	}
}
