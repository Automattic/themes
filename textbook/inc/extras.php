<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package TextBook
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function textbook_body_classes( $classes ) {

	// Adds a class of header-image when a header image exists
	if ( get_header_image() ) {
		$classes[] = 'header-image';
	}

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

	return $classes;
}
add_filter( 'body_class', 'textbook_body_classes' );

/**
 * Add descriptions to menu items
 *
 * src: https://www.binarymoon.co.uk/2015/04/adding-menu-descriptions-to-wordpress-menus/
 *
 * @return string
 */
function textbook_nav_description( $item_output, $item, $depth, $args ) {

	if ( 'header' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'textbook_nav_description', 10, 4 );

/**
 * Add featured image as background image to hero.
 *
 * @see wp_add_inline_style()
 */
function textbook_header_image_background() {
	global $wp_query;
	global $post;

	if ( get_header_image() ) {
		$css = '.site-header { background-image: url(' . esc_url( get_header_image() ) . '); }';
		wp_add_inline_style( 'textbook-style', $css );
	}
}
add_action( 'wp_enqueue_scripts', 'textbook_header_image_background' );
