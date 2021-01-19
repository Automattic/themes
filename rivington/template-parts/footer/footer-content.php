<footer id="colophon" class="site-footer responsive-max-width">
	<?php
	if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content.
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
		else : // Otherwise we'll fallback to the default footer below.
			get_template_part( 'template-parts/footer/footer', 'widgets' );

			get_template_part( 'template-parts/footer/privacy-policy', '' );

			if ( has_nav_menu( 'social' ) ) : ?>
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
				<?php
			endif;
		endif;
		?>

	<div class="site-info">
		<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
