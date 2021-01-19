<?php 
if ( ( true === get_theme_mod( 'hide_site_header', false ) && is_front_page() && is_page() ) ) : return; // Return if this is the homepage and the hide-header setting is active. ?>

<?php elseif ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If not, check if the FSE plugin is active, use the Header template for content. ?>

	<header id="masthead" class="fse-template-part fse-header entry-content">
		<?php
			$template = new A8C\FSE\WP_Template();
			$template->output_template_content( A8C\FSE\WP_Template::HEADER );
		?>
	</header>

<?php else : // Otherwise we'll fallback to the default Varia header below. ?>

	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
		<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
	</header><!-- #masthead -->

<?php endif; ?>