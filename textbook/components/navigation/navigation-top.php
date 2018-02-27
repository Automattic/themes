<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="header-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'textbook' ); ?></button>
	<?php wp_nav_menu(
		array(
			'theme_location' => 'header',
			'menu_id'        => 'header-menu'
		) ); ?>

	<div id="search-container" class="search-box-wrapper">
		<div class="search-box">
			<?php get_search_form(); ?>
		</div>
	</div>
</nav><!-- #site-navigation -->