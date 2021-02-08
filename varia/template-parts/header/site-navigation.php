<?php 
	$has_primary_nav       = has_nav_menu( 'menu-1' );
	$has_primary_nav_items = wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'fallback_cb'    => false,
			'echo'           => false,
		)
	);

	if ( $has_primary_nav && $has_primary_nav_items ) : 
?>
	<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'varia' ); ?>">

		<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
		<label for="toggle" id="toggle-menu" class="button">
			<?php _e( 'Menu', 'varia' ); ?>
			<span class="dropdown-icon open">+</span>
			<span class="dropdown-icon close">&times;</span>
			<span class="hide-visually expanded-text"><?php _e( 'expanded', 'varia' ); ?></span>
			<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'varia' ); ?></span>
		</label>

		<?php
		$main_nav_args = array(
			'theme_location' => 'menu-1',
			'menu_class'     => 'main-menu',
			'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
		);
		if ( get_theme_mod( 'enable_side_menu' ) === 1 ) {
			$main_nav_args['container_class'] = 'main-menu-container';
		}
		wp_nav_menu( $main_nav_args );
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>