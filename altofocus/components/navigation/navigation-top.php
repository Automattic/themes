<nav id="site-navigation" class="top-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<span class="meta-nav">
			<svg class="menu-icon menu-icon-open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
				<line class="line" x1="2" y1="2.6" x2="8" y2="2.6"/>
				<line class="line" x1="2" y1="5" x2="8" y2="5"/>
				<line class="line" x1="2" y1="7.4" x2="8" y2="7.4"/>
			</svg>
			<svg class="menu-icon menu-icon-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
				<line class="line" x1="2.5" y1="7.5" x2="7.5" y2="2.5"/>
				<line class="line" x1="2.5" y1="2.5" x2="7.5" y2="7.5"/>
			</svg>
		</span>
		<?php esc_html_e( 'Menu', 'altofocus' ); ?>
	</button>
	<?php wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'top-menu'
	) ); ?>
</nav><!-- #site-navigation -->
