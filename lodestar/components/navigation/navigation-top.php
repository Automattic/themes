<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'lodestar' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'lodestar' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id' => 'top-menu',
	) ); ?>
</nav><!-- #site-navigation -->
