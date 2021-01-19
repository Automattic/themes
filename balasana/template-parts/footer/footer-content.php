<footer id="colophon" class="site-footer responsive-max-width">
	<?php
	if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content.
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
		else : // Otherwise we'll fallback to the default Balasana footer below.
			get_template_part( 'template-parts/footer/footer', 'widgets' );

			if ( has_nav_menu( 'menu-2' ) || has_nav_menu( 'social' ) ) : ?>
				<div class="footer-menus">

					<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
						<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'balasana' ); ?>">
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
						<?php
					endif;

					if ( has_nav_menu( 'social' ) ) :
						?>
						<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'balasana' ); ?>">
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

				</div><!-- .footer-menus -->
				<?php
			endif;
		endif;
		?>

	<div class="site-info">
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
		<?php endif; ?>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'balasana' ) ); ?>" class="imprint">
			<?php
			/* translators: %s: WordPress. */
			printf( __( 'proudly powered by %s.', 'balasana' ), 'WordPress' );
			?>
		</a>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
