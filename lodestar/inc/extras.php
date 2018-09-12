<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lodestar
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lodestar_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options
	if ( is_customize_preview() ) {
		$classes[] = 'lodestar-customizer';
	}

	// Add class on front page
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'lodestar-front-page';
	}

	// Add class if site has a Custom Logo
	if ( has_custom_logo() ) {
		$classes[] = 'has-site-logo';
	}

	// Add class if no custom header or featured images
	$header_image = get_header_image();
	if ( ! has_header_image() && ( ! has_post_thumbnail() || is_home() ) ) {
		$classes[] = 'no-header-image';
	}

	// Add class if footer image has been added
	$footer_image = get_theme_mod( 'lodestar_footer_image' );
	if ( isset( $footer_image ) ) {
		$classes[] = 'lodestar-footer-image';
	}

	// Add class if sidebar is used
	if ( is_active_sidebar( 'sidebar-1' ) && ! lodestar_is_frontpage() ) {
		$classes[] = 'has-sidebar';
	}

	// Add class if top header content is added or WooCommerce is active
	$lodestar_header_top_text_1 = get_theme_mod( 'lodestar_header_top_text_1' );
	$lodestar_header_top_text_2 = get_theme_mod( 'lodestar_header_top_text_2' );
	if ( '' !== $lodestar_header_top_text_1 || '' !== $lodestar_header_top_text_2 || class_exists( 'WooCommerce' ) ) {
		$classes[] = 'has-top-content';
	}

	return $classes;
}
add_filter( 'body_class', 'lodestar_body_classes' );

/*
 * Count our number of active panels
 * Primarily used to see if we have any panels active, duh.
 */
function lodestar_panel_count() {
	$panels = array( '1', '2', '3', '4' );
	$panel_count = 0;

	foreach ( $panels as $panel ) :
		if ( get_theme_mod( 'lodestar_panel' . $panel ) ) :
			$panel_count++;
		endif;
	endforeach;

	return $panel_count;
}

/**
 * Checks to see if we're on the homepage or not.
 */
function lodestar_is_frontpage() {
	if ( is_front_page() && ! is_home() ) :
		return true;
	else :
		return false;
	endif;
}

/**
 * Adjust content_width value for portfolio page template.
 */
function lodestar_portfolio_content_width() {
	if ( is_page_template( 'templates/portfolio-page.php' ) ) {
		$GLOBALS['content_width'] = 1120;
	}
}
add_action( 'template_redirect', 'lodestar_portfolio_content_width' );
