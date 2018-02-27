<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Dyad
 */


/**
 * HTML Body classes
 *
 * @since    1.0
 * @version  1.0
 *
 * @param  array $classes
 */


// Add specific CSS class to body
function dyad_2_body_classes( $classes ) {
	global $post;

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	//Singular?
	if ( is_singular() ) {
		$classes[] = 'is-singular';
	}

	//Has featured image?
	if ( ! is_page() && dyad_2_has_post_thumbnail( $post->ID ) && dyad_2_jetpack_featured_image_display() ) {
		$classes[] = 'has-post-thumbnail';
	}

	//Has featured image?
	if ( is_page() && has_post_thumbnail() && dyad_2_jetpack_featured_image_display() ) {
		$classes[] = 'has-post-thumbnail';
	}

	$header_image = get_header_image();
	if ( ( ! dyad_2_has_banner_posts( 1 ) && ( is_home() || is_archive() || is_search() ) ) && '' == $header_image ) {
		$classes[] = 'no-featured-posts';
	}

	$classes[] = 'no-js';

	return $classes;
}
add_filter( 'body_class', 'dyad_2_body_classes' );
