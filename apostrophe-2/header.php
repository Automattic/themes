<?php
	/**
 * @package Apostrophe 2
 *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
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
		<div id="page" class="hfeed site">

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<a class="menu-toggle"><?php esc_html_e( 'Menu', 'apostrophe-2' ); ?></a>
					<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apostrophe-2' ); ?></a>

					<?php wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'apostrophe-2-navigation',
					) ); ?>

					<?php apostrophe_2_social_menu(); ?>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
