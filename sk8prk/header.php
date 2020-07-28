<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Seedlet
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sk8prk' ); ?></a>

		<header id="masthead" class="site-header wide-max-width">

			<?php get_template_part( 'template-parts/header/site-branding' ); ?>

			<div class="navigation-container">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'sk8prk' ); ?>">
					<button id="toggle-menu" class="button">
						<span class="dropdown-icon open"><?php _e( 'Menu', 'sk8prk' ); ?> <?php echo seedlet_get_icon_svg( 'menu_open' ) ?></span>
						<span class="dropdown-icon close"><?php _e( 'Close', 'sk8prk' ); ?> <?php echo seedlet_get_icon_svg( 'menu_close' ) ?></span>
						<span class="hide-visually expanded-text"><?php _e( 'expanded', 'sk8prk' ); ?></span>
						<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'sk8prk' ); ?></span>
					</button>
					<?php
					// Get menu slug
					$location_name = 'primary';
					$locations = get_nav_menu_locations();
					$menu_id = $locations[ $location_name ];
					$menu = wp_get_nav_menu_object( $menu_id );

					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'main-menu',
							'container_class' => 'main-menu-container menu-'. $menu->slug .'-container',
							'items_wrap'      => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'sk8prk' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . seedlet_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>
			</div>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
