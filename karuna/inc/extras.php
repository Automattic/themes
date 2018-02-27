<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Karuna
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function karuna_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	//Always add a front-page class to the front page
	if ( is_front_page() && ! is_home() ) {
		$classes[] = 'page-template-front-page';
	}

	//If we have no active social links menu and the header text is hidden, narrow the top bar
	if ( ! has_nav_menu( 'jetpack-social-menu' ) && 'blank' == get_header_textcolor() ) {
		$classes[] = 'no-top-bar';
	}

	return $classes;
}
add_filter( 'body_class', 'karuna_body_classes' );
