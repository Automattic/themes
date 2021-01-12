<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */
$has_primary_nav       = has_nav_menu( 'menu-1' );
$header_classes        = 'site-header responsive-max-width';
$header_classes       .= has_custom_logo() ? ' has-logo' : '';
$header_classes       .= 1 === get_theme_mod( 'header_text', 1 ) ? ' has-title-and-tagline' : '';
$header_classes       .= $has_primary_nav ? ' has-menu' : '';
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'varia' ); ?></a>

	<?php if ( ( true === get_theme_mod( 'hide_site_header', false ) && is_front_page() && is_page() ) ) : return; // Return if this is the homepage and the hide-header setting is active. ?>

	<?php elseif ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If not, check if the FSE plugin is active, use the Header template for content. ?>

		<header id="masthead" class="fse-template-part fse-header entry-content">
			<?php
				$template = new A8C\FSE\WP_Template();
				$template->output_template_content( A8C\FSE\WP_Template::HEADER );
			?>
		</header>

	<?php else : // Otherwise we'll fallback to the default Varia header below. ?>

		<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
		</header><!-- #masthead -->

	<?php endif; ?>

	<div id="content" class="site-content">
