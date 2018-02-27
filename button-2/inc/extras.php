<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Button 2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function button_2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) && ! has_nav_menu( 'jetpack-social-menu' ) ) {
		$classes[] = 'no-sidebar';
	}

	$bgimage = get_background_image();

	$bgimage = basename( $bgimage ); //Get the background's filename

	if ( 'buttonbg20170303.png' !== $bgimage ) {

		//If not using the default background, apply a special body class
		$classes[] = 'user-background';

	}

	return $classes;
}
add_filter( 'body_class', 'button_2_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function button_2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'button_2_pingback_header' );
