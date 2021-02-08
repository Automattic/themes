<?php if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content. ?>
	<footer class="fse-template-part fse-footer entry-content">
	<?php
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
	else : // Otherwise we'll fallback to the default Varia footer below.
		?>

	<footer id="colophon" class="site-footer responsive-max-width">
			<?php
			if ( ! ( true === get_theme_mod( 'hide_site_footer', false ) && is_front_page() && is_page() ) ) : // If this is the homepage and the footer elements are set to hide, don't load this part.
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part( 'template-parts/footer/footer', 'navigation' );
			endif;
			?>

	<?php endif; ?>

		<?php get_template_part( 'template-parts/footer/footer', 'info' ); ?>
	</footer><!-- #colophon -->
