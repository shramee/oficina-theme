<?php

remove_action( 'wp_footer', 'fsb_display_image' );

/** Don't show sidebar */
function storefront_get_sidebar() {}

/** Footer text */
function storefront_credit() {
	?>
	<div class="site-info">
		OFICINA LATINA NEW YORK CITY - address New York City - oficinalatina@oficinalatina.com<br>
		All company names and trademarks are the property of their respective owners
	</div><!-- .site-info -->
	<?php
}