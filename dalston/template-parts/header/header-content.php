<?php 

$has_primary_nav = has_nav_menu( 'menu-1' );
$header_classes  = 'site-header';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= 1 === get_theme_mod( 'header_text', 1 ) ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';

if ( ( true === get_theme_mod( 'hide_site_header', false ) && is_front_page() && is_page() ) ) : return; // Return if this is the homepage and the hide-header setting is active. ?>

<?php elseif ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If not, check if the FSE plugin is active, use the Header template for content. ?>
	
<header id="masthead" class="site-header site-branding entry-content">
	<?php
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::HEADER );
	?>
</header>

<?php else : // Otherwise we'll fallback to the default Varia header below. ?>

<header id="masthead" class="<?php echo $header_classes; ?>" role="banner" >

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
	<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
	<?php get_template_part( 'template-parts/header/social', 'navigation' ); ?>

</header><!-- #masthead -->

<?php endif; ?>