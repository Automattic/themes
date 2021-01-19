<footer id="colophon" class="site-footer responsive-max-width">
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<?php if ( has_nav_menu( 'social' ) ) : ?>
		<nav class="footer-navigation social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'varia' ); ?>">
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
	<div class="site-info">
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			?>
			<div class="privacy-policy-container">
			<?php the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' ); ?>
			</div>
			<?php
		}
		?>
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
		<?php endif; ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'varia' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'proudly powered by %s.', 'varia' ), 'WordPress' );
			?>
		</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
