<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
	<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'varia' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-2',
				'menu_class'     => 'footer-menu',
				'depth'          => 1,
			)
		);
		?>
	</nav><!-- .footer-navigation -->
<?php endif; ?>