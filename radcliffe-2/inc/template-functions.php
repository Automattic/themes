<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package Radcliffe 2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function radcliffe_2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-thumbnail to posts with no featured image.
	if ( ( is_single() || is_page() ) && radcliffe_2_has_post_thumbnail() ) {
		$classes[] = 'has-featured-image';
	} else {
		$classes[] = 'no-featured-image';
	}

	if ( is_singular() && get_header_image() ) {
		$classes[] = 'single-thumbnail';
	}

	return $classes;
}
add_filter( 'body_class', 'radcliffe_2_body_classes' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'radcliffe_2_excerpt_more' ) ) :
	function radcliffe_2_excerpt_more( $more ) {
		$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
			esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( esc_html__( 'Continue reading %s', 'radcliffe-2' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
			);
		return ' &hellip; ' . $link;
	}
	add_filter( 'excerpt_more', 'radcliffe_2_excerpt_more' );
endif;

/**
 * Add featured image as background image.
 */
function radcliffe_2_background_image() {

	$image = radcliffe_2_get_attachment_image_src( get_the_ID(), get_post_thumbnail_id( get_the_ID() ), 'radcliffe-post-image' );

	if ( ! $image ) {
		return;
	}

	printf( ' style="background-image: url(\'%s\');"', esc_url( $image ) );
}
