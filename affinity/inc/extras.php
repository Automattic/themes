<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Affinity
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function affinity_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	//Adds a class if a header image or featured header image is active
	if ( get_header_image() || ( affinity_has_post_thumbnail() && affinity_jetpack_featured_image_display() && 'post' === get_post_type() ) || ( has_post_thumbnail() && is_singular() && affinity_jetpack_featured_image_display() ) ) {
		$classes[] = 'custom-header-active';
	} else {
		$classes[] = 'no-custom-header';
	}

	//Adds a class if we're viewing the Customizer for easier styling of theme options
	if ( is_customize_preview() ) {
		$classes[] = 'affinity-customizer';
	}

	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'affinity-front-page';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'affinity_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function affinity_post_classes( $classes ) {
	// Adds a class of affinity-panel to posts on the front page.
	if ( is_front_page() && 'page' == get_post_type() ) {
		$classes[] = 'affinity-panel';
	}

	if ( is_front_page() && 'page' == get_post_type() && ! has_post_thumbnail() ) {
		$classes[] = 'no-featured-image';
	}

	return $classes;
}
add_filter( 'post_class', 'affinity_post_classes' );


/*
 * Count our number of active panels
 * Primarily used to see if we have any panels active, duh.
 */
function affinity_panel_count() {
	$panels = array( '1', '2', '3', '4', '5' );
	$panel_count = 0;
	foreach ( $panels as $panel ) :
		if ( get_theme_mod( 'affinity_panel' . $panel ) ) :
			$panel_count++;
		endif;
	endforeach;
	return $panel_count;
}
