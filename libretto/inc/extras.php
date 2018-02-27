<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Libretto
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 */
function libretto_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'libretto_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 * This class is used to distinguish blogs with multiple
 * authors from blogs with only one author.
 */
function libretto_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class if we're showing a header image on the page
	if ( ( libretto_has_post_thumbnail() && is_single() && libretto_jetpack_featured_image_display() ) || 
		 ( has_post_thumbnail() && is_singular() && libretto_jetpack_featured_image_display() ) || 
		  get_header_image() ) :
		$classes[] = 'libretto-has-header-image';
	endif;

	// Adds a class if we're on the homepage (blog index) in order to hide the header on mobile
	if ( is_home() ) :
		$classes[] = 'libretto-blog-home';
	endif;
	return $classes;
}
add_filter( 'body_class', 'libretto_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 * This serves to distinguish between "long form" post types
 * (standard, gallery, image, audio, video, and chat) and
 * "short form" post types, which are styled differently.
 * It also allows us to style posts with featured images a
 * little bit differently from those without.
 */
function libretto_post_classes( $classes ) {
	if ( is_single() || is_page() || is_search() || is_archive() || is_front_page() || is_home() ) :
		// Check our post format to see if it should be styled as a long-form or short-form post
		$post_format = get_post_format();
		if ( 'aside' === $post_format || 'quote' === $post_format || 'link' === $post_format || 'status' === $post_format ) {
			$classes[] = 'libretto-short-form';
		} else {
			$classes[] = 'libretto-long-form';
		}
	endif;
	return $classes;
}
add_filter( 'post_class', 'libretto_post_classes' );


/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 *
 */
function libretto_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) ) {
		return $url;
	}
	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent !== $id ) {
		$url .= '#main';
	}
	return $url;
}
add_filter( 'attachment_link', 'libretto_enhanced_image_navigation', 10, 2 );
