<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AltoFocus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'altofocus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-wrap">
			<?php get_template_part( 'components/header/header', 'site-branding' ); ?>
			<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
		</div>
	</header>
	<div id="content" class="site-content">
