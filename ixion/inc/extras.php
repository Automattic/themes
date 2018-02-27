<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Ixion
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ixion_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add a class of no-sidebar when there is no sidebar present
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Add a class of no-sidebar to the full-width page template
	if ( ( is_page_template( 'templates/full-width-page.php' ) || is_post_type_archive( 'jetpack-testimonial' ) ) && ! ( is_front_page() && is_page() ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( is_front_page() && is_page() ) {
		$classes[] = 'page-template-front-page';
	}

	if ( ! is_front_page() && is_page() || is_single() ) {
		$classes[] = 'singular';
	}

	$button_text = get_theme_mod( 'ixion_button_text', '' );
	if ( '' !== $button_text ) {
		$classes[] = 'has-cta-button';
	}

	$blogdescription = get_bloginfo( 'description' );
	if ( ! empty( $blogdescription ) ) {
		$classes[] = 'has-description';
	}

	if ( 'blank' === get_theme_mod( 'header_textcolor' ) ) {
		$classes[] = 'header-text-hidden';
	}

	$featured_posts = ixion_get_featured_posts();
	if ( empty( $featured_posts ) ) {
		$classes[] = 'no-featured-posts';
	}

	if ( 'none' === get_theme_mod( 'ixion_header_overlay_opacity' ) ) {
		$classes[] = 'header-overlay-none';
	} else if ( 'light' === get_theme_mod( 'ixion_header_overlay_opacity' ) ) {
		$classes[] = 'header-overlay-light';
	} else if ( 'medium' === get_theme_mod( 'ixion_header_overlay_opacity' ) ) {
		$classes[] = 'header-overlay-medium';
	}

	if ( 'none' === get_theme_mod( 'ixion_featured_overlay_opacity' ) ) {
		$classes[] = 'featured-content-overlay-none';
	} else if ( 'light' === get_theme_mod( 'ixion_featured_overlay_opacity' ) ) {
		$classes[] = 'featured-content-overlay-light';
	} else if ( 'dark' === get_theme_mod( 'ixion_featured_overlay_opacity' ) ) {
		$classes[] = 'featured-content-overlay-dark';
	}

	return $classes;
}
add_filter( 'body_class', 'ixion_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for posts.
 * @return array
 */
function ixion_post_classes( $classes ) {
	if ( ! has_post_thumbnail() ) {
		$classes[] = "no-featured-image";
	}

	return $classes;
}
add_filter( 'post_class', 'ixion_post_classes' );

/**
 * Sets the authordata global when viewing single posts.
 *
 * It removes the need to call the_post() and rewind_posts() on single posts
 * to print information about the author before the loop.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function ixion_setup_author() {
	global $wp_query;
	if ( $wp_query->is_single() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'ixion_setup_author' );
