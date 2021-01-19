<footer id="colophon" class="site-footer <?php echo class_exists( 'A8C\FSE\WP_Template' ) ? 'entry-content' : 'responsive-max-width'; ?>">
	<?php
	if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content.
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
		else : // Otherwise we'll fallback to the default Varia footer below.
			get_template_part( 'template-parts/footer/footer', 'widgets' );

			if ( has_nav_menu( 'menu-2' ) ) :
				?>
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
				<?php
			endif;
		endif;
		?>

	<div class="site-info">
		<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
		<?php get_template_part( 'template-parts/footer/privacy-policy', '' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
