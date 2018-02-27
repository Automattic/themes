<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gazette
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
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gazette' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-inner">
			<div class="site-branding">
				<?php gazette_the_site_logo(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="screen-reader-text"><?php _e( 'Primary Menu', 'gazette' ); ?></span></button>
					<?php wp_nav_menu( array( 'theme_location'  => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<div id="search-header" class="search-header">
				<button class="search-toggle" aria-controls="search-form" aria-expanded="false"><span class="screen-reader-text"><?php _e( 'Search', 'gazette' ); ?></span></button>
				<?php get_search_form(); ?>
			</div><!-- #search-header -->
		</div><!-- .site-header-inner -->
	</header><!-- #masthead -->

	<?php if ( get_header_image() ) : ?>
		<?php if ( ( is_front_page() && 1 == get_theme_mod( 'gazette_header_image' ) ) || 1 != get_theme_mod( 'gazette_header_image' ) ) : ?>
		<div class="header-image">
			<div class="header-image-inner">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></a>
			</div><!-- .header-image-inner -->
		</div><!-- .header-image -->
		<?php endif; ?>
	<?php endif; // End header image check. ?>

	<div id="content" class="site-content">
