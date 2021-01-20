<header id="masthead" class="site-header alignfull">

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
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
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>

	<?php get_template_part( 'template-parts/header/social', 'navigation' ); ?>

</header><!-- #masthead -->
