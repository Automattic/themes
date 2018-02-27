<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Toujours
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function toujours_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'toujours_infinite_scroll_render',
		'footer'         => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	//Site logo
	add_image_size( 'toujours-site-logo', 1200, 400 );
	add_theme_support( 'site-logo', array(
		'header-text' => array(
			'site-title',
			'site-description',
			),
		'size'        => 'toujours-site-logo',
	) );

	//Featured content
	add_theme_support( 'featured-content' , array(
		'featured_content_filter' => 'toujours_get_banner_posts',
		'max_posts'               => 8,
		'post_types'              => array( 'post' ),
	) );

	// Social menu
	add_theme_support( 'jetpack-social-menu' );

} // end function toujours_jetpack_setup
add_action( 'after_setup_theme', 'toujours_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function toujours_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}

/**
 * Getter function for Featured Content.
 * See http://jetpack.me/support/featured-content/
 */
function toujours_get_banner_posts() {
	return apply_filters( 'toujours_get_banner_posts', array() );
}

/**
 * Check for minimum number of featured posts
 */
function toujours_has_banner_posts( $minimum = 1 ) {
	if ( is_paged() ) {
		return false;
	}

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'toujours_get_banner_posts', array() );

	if ( ! is_array( $featured_posts ) ) {
		return false;
	}

	if ( $minimum > count( $featured_posts ) ) {
		return false;
	}
	return true;
}

/**
 * If there is a social menu set, make IS click to scroll
 */
if ( function_exists( 'jetpack_is_mobile' ) && ! function_exists( 'toujours_footer_widgets' ) ) :
function toujours_footer_widgets() {
	if ( has_nav_menu( 'jetpack-social-menu' ) || is_active_sidebar( 'footer' ) || ( ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) ) {
		return true;
	}
	return;
}
endif;
add_filter( 'infinite_scroll_has_footer_widgets', 'toujours_footer_widgets' );


/**
 * Return early if Social Menu is not available.
 */
function toujours_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}
