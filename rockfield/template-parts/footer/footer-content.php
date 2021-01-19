<footer id="colophon" class="site-footer">
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/privacy-policy', '' ); ?>
	<?php get_template_part( 'template-parts/header/social', 'navigation' ); ?>

	<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
		<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'rockfield' ); ?>">
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
	<div class="site-info">
		<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
