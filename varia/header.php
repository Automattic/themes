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

	<?php
	if ( ( true === get_theme_mod( 'hide_site_header', false ) && is_front_page() && is_page() ) ) {
		// Do nothing if this is the homepage and the hide-header setting is active.
	} elseif ( class_exists( 'A8C\FSE\WP_Template' ) ) { // If not, check if the FSE plugin is active, use the Header template for content.
		get_template_part( 'template-parts/header/fse', 'header' );
	} else { // Otherwise we'll fallback to the default Varia header below.
		get_template_part( 'template-parts/header/header', 'content' );
	}
	?>

	<div id="content" class="site-content">
