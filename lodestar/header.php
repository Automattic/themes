<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lodestar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lodestar' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="header-top">
			<div class="wrap">
				<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
				<?php get_template_part( 'components/header/content', 'top' ); ?>
				<?php // Add Woocommerce Cart to header if Woocommerce exists
					if ( class_exists( 'WooCommerce' ) ) {
						lodestar_woocommerce_header_cart();
					}
				?>
			</div>
		</div><!-- .header-top -->

		<?php get_template_part( 'components/header/header', 'image' ); ?>

	</header>

	<div id="content" class="site-content">
