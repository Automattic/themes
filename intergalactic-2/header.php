<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Intergalactic 2
 */

$header = get_header_image();

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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'intergalactic-2' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<?php if ( ! empty( $header ) && ! is_singular() ) { ?>
			<div class="header-background" style="background-image:url(<?php echo esc_url( $header ); ?>)"></div>
		<?php } ?>

		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>

		<button class="menu-toggle x">
			<span class="lines"></span>
			<?php esc_html_e( 'Menu', 'intergalactic-2' ); ?>
		</button>
	</header><!-- #masthead -->
	<div class="slide-menu">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php intergalactic_2_social_menu(); ?>

		<?php get_sidebar(); ?>

	</div>
	<div id="content" class="site-content">
