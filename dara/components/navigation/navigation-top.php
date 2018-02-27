<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dara' ); ?></button>
	<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
	<?php
		if ( function_exists( 'dara_woocommerce_header_cart' ) ) {
			dara_woocommerce_header_cart();
		}
	?>
</nav>
