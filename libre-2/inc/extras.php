<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Libre 2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function libre_2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// If there is no author bio available, add a class to better style the page title
	if ( is_author() && ! get_the_author_meta( 'description' ) ) {
		$classes[] = 'no-taxonomy-description';
	}

	// If there is no taxonomy description, add a class to better style the page title
	if ( ! is_author() && is_archive() && ! get_the_archive_description() || is_search() ) {
		$classes[] = 'no-taxonomy-description';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) &&
		 ! is_page_template( 'templates/right-column-page.php' ) &&
		 ! is_page_template( 'templates/full-width-page.php' ) ) {
		$classes[] = 'no-sidebar';
	}

	if ( is_singular() ) {
		$classes[] = 'singular';
	}

	return $classes;
}
add_filter( 'body_class', 'libre_2_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function libre_2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'libre_2_pingback_header' );
