<footer id="colophon" class="site-footer">
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/privacy-policy', '' ); ?>
<?php if ( has_nav_menu( 'social' ) ) : ?>
	<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'rockfield' ); ?>">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'social',
			'menu_class'     => 'social-links-menu',
			'link_before'    => '<span class="screen-reader-text">',
			'link_after'     => '</span>' . varia_get_icon_svg( 'link' ),
			'depth'          => 1,
		)
	);
	?>
	</nav><!-- .social-navigation -->
<?php endif; ?>

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
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
		<?php endif; ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rockfield' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'proudly powered by %s.', 'rockfield' ), 'WordPress' );
			?>
		</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
