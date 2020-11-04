<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Stratford
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

<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
?>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'varia' ); ?></a>

		<header id="masthead" class="site-header alignfull">
			
			<div class="site-header-wrapper">
				
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
			
				
				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<div id="site-menu" class="site-menu">
					<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'varia' ); ?>">
						<input type="checkbox" role="button" aria-haspopup="true" id="toggle" class="hide-visually">
						<label for="toggle" id="toggle-menu" class="button">
							<?php _e( 'Menu', 'varia' ); ?>
							<span class="dropdown-icon open">+</span>
							<span class="dropdown-icon close">&times;</span>
							<span class="hide-visually expanded-text"><?php _e( 'expanded', 'varia' ); ?></span>
							<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'varia' ); ?></span>
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
				</div><!-- .site-menu -->
				<?php endif; ?>
				
			</div>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
