<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Toujours
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function toujours_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class when sidebar widget is unused
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds class if user has added custom background image
	// Allows default background pattern to be retina
	$bgimage = get_background_image();
	$bgimage = basename( $bgimage ); //Get the background's filename
	if ( 'toujoursbackground20160105.png' !== $bgimage ) {
		$classes[] = 'user-background';
	}

	// Add a class if has custom header image
	$header_image = get_header_image();
	if ( ! empty( $header_image ) ) {
		$classes[] = 'has-header-image';
	}

	// Add class if featured image borders hidden
	if ( false === get_theme_mod( 'toujours_featured_image_borders', true ) ) {
		$classes[] = 'hide-featured-image-borders';
	}

	return $classes;
}
add_filter( 'body_class', 'toujours_body_classes' );

/**
 * Remove the 1st gallery shortcode from gallery post format content.
 */
function toujours_strip_first_gallery( $content ) {
	if ( 'gallery' === get_post_format() && 'post' === get_post_type() && get_post_gallery() ) {

		$regex   = get_shortcode_regex( array( 'gallery' ) );
		$content = preg_replace( '/'. $regex .'/s', '', $content, 1 );
		$content = wp_kses_post( $content );

	}

	return $content;
}
add_filter( 'the_content', 'toujours_strip_first_gallery' );
