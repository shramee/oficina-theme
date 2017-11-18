<?php
/** Enqueue home scripts */
function oficina_enqueue() {
	if ( is_home() ) {
		wp_enqueue_script( 'oficina-home', get_stylesheet_directory_uri() . '/script.js', [ 'jquery', 'masonry' ] );
	}
}
add_action( 'wp_enqueue_scripts', 'oficina_enqueue' );

/** Site branding wrapper and display */
function storefront_site_branding() {
	?>
	<div class="site-branding">
		<?php
		$html = '<img src="' . get_stylesheet_directory_uri() . '/screenshot.png">';

		if ( '' !== get_bloginfo( 'description' ) ) {
			$html .= '<p class="site-description">' . nl2br( get_bloginfo( 'description', 'display' ) ) . '</p>';
		} else {
			$html .=
				'<p class="site-description">' .
				'OFICINA LATINA - 123 A. BCD AVENUE - NEW YORK, NY 90544<br>' .
				'PHONE: 123.325.5478 / EMAIL@EXAMPLE.TXT<br><br>' .
				'OFICINA 1M - 456 F.AVENUE - NEW YORK, NY 90632<br>' .
				'PHONE: 347.325.5478 / EMAIL@EXAMPLE.TXT</p>';
		}

		echo $html;

		?>
	</div>
	<?php
}


/** Display Menu */
function storefront_primary_navigation() {
	?>
	<nav id="side-menu" class="side-menu" role="navigation" aria-label="<?php esc_html_e( 'Menu', 'storefront' ); ?>">
		<a class="side-menu-toggle"><?php _e( 'MENU', 'storefront' ); ?></a>
		<ul>
			<?php
			$args = array( 'posts_per_page' => 12, 'category' => 18 );

			$myposts = get_posts( $args );
			/** @var WP_Post $post */
			foreach ( $myposts as $post ):?>
				<li>
					<a href="<?php get_the_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
				</li>
			<?php endforeach;
			wp_reset_postdata();?>


		</ul>
	</nav><!-- #side-menu -->
	<?php
}

/** Don't display Secondary Navigation */
function storefront_secondary_navigation() {}
