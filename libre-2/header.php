<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Libre 2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrapper">
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'libre-2' ); ?></a>
		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" class="custom-header">
		</a>
		<?php endif; // End header image check. ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php if ( function_exists( 'the_custom_logo' ) ) : ?>
					<?php the_custom_logo(); ?>
				<?php endif; ?>
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div class="nav-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776; <?php esc_html_e( 'Menu', 'libre-2' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
					<?php libre_2_social_menu(); ?>
				</nav><!-- #site-navigation -->

				<?php // Add Woocommerce Cart to header if Woocommerce exists
					if ( class_exists( 'WooCommerce' ) ) {
						libre_2_woocommerce_header_cart();
					}
				?>
			</div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">
