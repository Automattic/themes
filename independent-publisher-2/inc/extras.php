<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Independent_Publisher_2
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function independent_publisher_2_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class if are no widgets to render in main sidebar.
	if ( is_active_sidebar( 'sidebar-1' ) && ! is_404() ) {
		$classes[] = 'has-sidebar';
	}
	$is_wc_product_page = false;
	if ( class_exists( 'WooCommerce' ) && is_product() ) {
		$is_wc_product_page = true;
	}

	if ( independent_publisher_2_has_header_image() ||
		 ( independent_publisher_2_has_cover_image() && 1 == independent_publisher_2_jetpack_featured_image_display() && ! $is_wc_product_page ) ) {
		$classes[] = 'has-header-image';
	}

	// Adds a gravatar-logo-disabled when gravatar display is disabled.
	if  ( false === get_theme_mod( 'independent_publisher_2_display_gravatar', true ) ) {
		$classes[] = 'gravatar-logo-disabled';
	}

	return $classes;
}
add_filter( 'body_class', 'independent_publisher_2_body_classes' );

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post
 * @return array
 */
function independent_publisher_2_post_class( $classes ) {
	$content = get_post_field( 'post_content', get_the_ID() );
	if ( empty( $content ) ) {
		$classes[] = 'empty-content';
	}
	return $classes;
}
add_filter( 'post_class', 'independent_publisher_2_post_class' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function independent_publisher_2_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'independent_publisher_2_pingback_header' );
