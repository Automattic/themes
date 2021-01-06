<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blank Canvas
 * @since 1.0
 */
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blank-canvas' ); ?></a>

	<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
		<?php if ( has_custom_logo() && $show_title && ! is_singular() ) : ?>
			<div class="site-logo"><?php the_custom_logo(); ?></div>
		<?php endif; ?>

		<div class="site-branding">
			<?php if ( ! empty( $blog_info ) && $show_title && ! is_singular() ) : ?>
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></h1>
				<?php else : ?>
					<p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></p>
				<?php endif; ?>
			<?php endif; ?>

			<?php if ( ( $description || is_customize_preview() ) && $show_title && ! is_singular() ) : ?>
				<p class="site-description">
					<?php echo $description; ?>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
