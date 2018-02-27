<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Publication
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'publication' ); ?></a>

	<div id="body-wrapper" class="body-wrapper">
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<div class="site-header-inner">
					<div class="site-branding">
						<?php publication_the_site_logo(); ?>

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php
							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) :
						?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div><!-- .site-header-inner -->
			</header><!-- #masthead -->

			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' ) ||  is_active_sidebar( 'sidebar-2' ) ) : ?>
				<button class="menu-toggle" aria-controls="slide-menu" aria-expanded="false"><span class="screen-reader-text"><?php esc_html_e( 'Menu', 'publication' ); ?></span></button>

				<div id="slide-menu" class="slide-menu">
					<div class="slide-wrapper">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation">
								<h2 class="screen-reader-text"><?php esc_html_e( 'Primary Navigation', 'publication' ); ?></h2>
								<?php
									// Primary navigation menu.
									wp_nav_menu( array(
										'container_class' => 'menu-wrapper',
										'menu_id'         => 'primary-menu',
										'theme_location'  => 'primary',
									) );
								?>
							</nav><!-- #site-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="site-social" class="social-navigation">
								<h2 class="screen-reader-text"><?php esc_html_e( 'Social Navigation', 'publication' ); ?></h2>
								<?php
									// Social navigation menu.
									wp_nav_menu( array(
										'container_class' => 'menu-wrapper',
										'menu_id'         => 'social-menu',
										'theme_location'  => 'social',
										'link_before'     => '<span class="screen-reader-text">',
										'link_after'      => '</span>',
										'depth'           => 1,
									) );
								?>
							</nav><!-- #site-social -->
						<?php endif; ?>
					</div><!-- .slide-wrapper -->
					<?php get_sidebar( 'menu' ); ?>
				</div><!-- .slide-menu -->
			<?php endif; ?>

			<div id="content" class="site-content">