<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Intergalactic 2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function intergalactic_2_body_classes( $classes ) {

	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	// Adds a class of single-thumbnail to single posts with a featured image
	if ( is_single() && intergalactic_2_has_post_thumbnail() && intergalactic_2_jetpack_featured_image_display() ) {
		$classes[] = 'single-thumbnail';
	}
	else if ( is_page() && has_post_thumbnail() && intergalactic_2_jetpack_featured_image_display() ) {
		$classes[] = 'single-thumbnail';
	}
	else if ( is_singular() && get_header_image() ) {
		$classes[] = 'single-thumbnail';
	}
	else {
		$classes[] = 'no-thumbnail';
	}

	// Adds class for header image
	if ( get_header_image() ) {
		$classes[] = 'has-custom-header';
	}

	if ( 'blank' == get_header_textcolor() && ! is_single() ) {
		$classes[] = 'but-no-site-title';
	}

	return $classes;
}
add_filter( 'body_class', 'intergalactic_2_body_classes' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function intergalactic_2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'intergalactic_2_pingback_header' );

