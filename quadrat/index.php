<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Quadrat
 * @since 1.0.0
 */

function get_nav_menu() {
	$menus = wp_get_nav_menus();

	if ( is_wp_error( $menus ) || empty( $menus ) ) {
		return false;
	}

	$counts = wp_list_pluck( $menus, 'count' );
	$menus  = array_combine( $counts, $menus );
	ksort( $menus );
	$menus = array_reverse( $menus );
	$menus = array_values( $menus );
	$menu  = array_shift( $menus );

	if ( empty( $menu->count ) ) {
		return false;
	}

	return $menu;
}

get_header();

// the header
echo do_blocks( file_get_contents( get_stylesheet_directory() . '/templates/header.html' ) );

if ( is_active_sidebar( 'navigation' ) ) {
	dynamic_sidebar( 'navigation' );
} else {
	$menu = get_nav_menu();
	the_widget(
		'WP_Nav_Menu_Widget',
		array(
			'nav_menu' => $menu,
		)
	);
}

if ( is_active_sidebar( 'social-icons' ) ) {
	dynamic_sidebar( 'social-icons' );
}

	// the query
	echo do_blocks( '<!-- wp:post-content {"layout":{"inherit":true}} /-->' );

	// the footer
	echo do_blocks( file_get_contents( get_stylesheet_directory() . '/templates/footer.html' ) );
