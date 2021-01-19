<footer id="colophon" class="site-footer responsive-max-width">
	<?php
	if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content.
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
		else : // Otherwise we'll fallback to the default footer below.
			get_template_part( 'template-parts/footer/footer', 'widgets' );

			get_template_part( 'template-parts/footer/privacy-policy', '' );

			get_template_part( 'template-parts/header/social', 'navigation' ); 
		endif;
		?>

	<div class="site-info">
		<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
