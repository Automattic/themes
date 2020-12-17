<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */
$has_primary_nav = has_nav_menu( 'menu-1' );
$header_classes  = 'site-header responsive-max-width';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= 1 === get_theme_mod( 'header_text', 1 ) ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';
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

	<?php if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content. ?>

		<header id="masthead" class="fse-template-part fse-header entry-content">
			<?php
				$template = new A8C\FSE\WP_Template();
				$template->output_template_content( A8C\FSE\WP_Template::HEADER );
			?>
		</header>

	<?php else : // Otherwise we'll fallback to the default Varia header below. ?>
		<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
			<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

			<?php if ( $has_primary_nav ) : ?>
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
					$main_nav_args = array(
						'theme_location'  => 'menu-1',
						'menu_class'      => 'main-menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					);
					if ( get_theme_mod( 'enable_side_menu' ) === 1 ) {
						$main_nav_args['container_class'] = 'main-menu-container';
					}
					wp_nav_menu( $main_nav_args );
					?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'varia' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . varia_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

		</header><!-- #masthead -->

	<?php endif; ?>

	<div id="content" class="site-content">
