<?php declare( strict_types = 1 ); ?>
<?php 
$has_primary_nav = has_nav_menu( 'menu-1' );
if ( $has_primary_nav ) : ?>
	<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'rivington' ); ?>">
		<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
		<label for="toggle" id="toggle-menu" class="button">
			<?php _e( 'Menu', 'rivington' ); ?>
			<span class="dropdown-icon open">+</span>
			<span class="dropdown-icon close">&times;</span>
			<span class="hide-visually expanded-text"><?php _e( 'expanded', 'rivington' ); ?></span>
			<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'rivington' ); ?></span>
		</label>
		<?php
		wp_nav_menu(
			array(
				'container_class' => 'main-menu-container',
				'theme_location'  => 'menu-1',
				'menu_class'      => 'main-menu',
				'items_wrap'      => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>