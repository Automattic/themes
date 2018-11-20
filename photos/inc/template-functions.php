<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package photos
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function photos_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'photos_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function photos_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'photos_pingback_header' );


/**
 * Filtering the comment reply link arguments so we can add an svg icon
 */
function photos_comment_reply_link_args( $args, $comment, $post ) {
	$args['reply_text'] = photos_get_svg( array( 'icon' => 'reply' ) ) . ' ' . $args['reply_text'];
	return $args;
}
add_filter( 'comment_reply_link_args', 'photos_comment_reply_link_args', 10, 3 );
