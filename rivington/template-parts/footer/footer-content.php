<?php declare( strict_types = 1 ); ?>
<footer id="colophon" class="site-footer responsive-max-width">
	<?php
	if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content.
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
		else : // Otherwise we'll fallback to the default footer below.
			if ( ! ( true === get_theme_mod( 'hide_site_footer', false ) && is_front_page() && is_page() ) ) : // If this is the homepage and the footer elements are set to hide, don't load this part.
				get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part( 'template-parts/footer/privacy', 'policy' );
				get_template_part( 'template-parts/header/social', 'navigation' ); 
			endif;
		endif;
		?>

	<div class="site-info">
		<?php get_template_part( 'template-parts/footer/site', 'name' ); ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
