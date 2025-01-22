<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Toujours
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'toujours' ); ?></a>

	<?php $header_image = get_header_image(); ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="wrap">
			<div class="site-branding">
				<?php
					if ( function_exists( 'jetpack_the_site_logo' ) ) {
						jetpack_the_site_logo();
					}
					if ( ! empty( $header_image ) ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="" class="header-image">
						</a>
					<?php endif;
					if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'toujours' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>
		</div><!-- .wrap -->
	</header><!-- #masthead -->

	<?php

	// checks whether homepage is posts or static page
	$homepage = get_option( 'show_on_front' );

	// check what page we're on
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	?>

	<?php // if we're on a static front page, or the blog index is the homepage and we're on the first page, show the slideshow ?>
	<?php if ( ( is_front_page() && 'page' === $homepage ) || ( is_home() && 1 === $paged && 'posts' === $homepage ) ) { ?>
		<?php
		if ( toujours_has_banner_posts( 1 ) ) { ?>
			<?php get_template_part( 'template-parts/content', 'slideshow' ); ?>
		<?php }
		?>

		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<div id="tagline">
				<div class="wrap">
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				</div>
			</div>
		<?php endif; ?>
	<?php } ?>


	<?php // only show recent posts if is home && page one ?>
	<?php if ( is_home() && 1 === $paged ) { ?>
		<?php if ( get_theme_mod( 'toujours_recent_posts' ) ) {
			get_template_part( 'template-parts/content', 'recent-posts' );
		} ?>
	<?php } ?>


		<div id="content" class="site-content">
			<div class="wrap">

