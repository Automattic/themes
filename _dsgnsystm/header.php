<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_dsgnsystm' ); ?></a>

		<header id="masthead" class="site-header responsive-max-width">

			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', '_dsgnsystm' ); ?>">
					<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
					<label for="toggle" id="toggle-menu" class="button">
						<?php _e( 'Menu', '_dsgnsystm' ); ?>
						<span class="hide-visually expanded-text">expanded</span>
						<span class="hide-visually collapsed-text">collapsed</span>
					</label>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'main-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', '_dsgnsystm' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . _dsgnsystm_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
