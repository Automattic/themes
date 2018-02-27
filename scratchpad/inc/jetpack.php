<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Scratchpad
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function scratchpad_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'scratchpad_infinite_scroll_render',
		'footer'         => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	//Site logo
	add_image_size( 'scratchpad-site-logo', 800, 300 );
	add_theme_support( 'site-logo', array(
		'size'      => 'scratchpad-site-logo',
	) );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );
}
add_action( 'after_setup_theme', 'scratchpad_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function scratchpad_infinite_scroll_render() {
	$currentpost = get_option( 'posts_per_page' );

	while ( have_posts() ) {

		scratchpad_pieces( $currentpost );
		$currentpost++;

		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}

/*
 * Turn off infinite scroll if mobile + sidebar, or if footer widgets are active
 */
if ( function_exists( 'jetpack_is_mobile' ) && ! function_exists( 'scratchpad_has_footer_widgets' ) ) {

	function scratchpad_has_footer_widgets() {
		if ( is_active_sidebar( 'sidebar-2' ) || ( ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) ) {
			return true;
		}

		return false;
    }

} //endif
add_filter( 'infinite_scroll_has_footer_widgets', 'scratchpad_has_footer_widgets' );

/**
 * Return early if Site Logo is not available.
 */
function scratchpad_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

function scratchpad_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}
