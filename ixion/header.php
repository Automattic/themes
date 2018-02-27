<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ixion
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ixion' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="utility-container">
			<?php ixion_social_menu(); ?>
			<?php get_search_form(); ?>
		</div>

		<div class="branding-container">
			<?php get_template_part( 'components/header/site', 'branding' ); ?>
			<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
		</div>

	</header>

	<?php if ( is_front_page() ) : ?>
		<div class="front-page-wrapper">
			<div class="header-overlay">
				<?php if ( get_header_image() ) : ?>
					<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
				<?php endif; ?>
				<div class="site-description-wrapper">
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>

					<?php
					$button = get_theme_mod( 'ixion_button_text', '' );

					if ( '' !== $button || is_customize_preview() ) : ?>
						<a href="<?php echo esc_url( get_theme_mod( 'ixion_button_link', '' ) ); ?>" class="button callout-button"><?php echo esc_html( $button ); ?></a>
					<?php endif; ?>
				</div><!-- .site-description-wrapper -->
			</div><!-- .header-overlay -->
			<?php get_template_part( 'components/features/featured-content/display', 'featured' ); ?>
		</div><!-- .front-page-wrapper -->
	<?php endif; // End is_front_page() check ?>

	<div id="content" class="site-content">
