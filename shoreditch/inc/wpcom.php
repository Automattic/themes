<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Shoreditch
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function shoreditch_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'f3f3f3',
			'text'   => '73757D',
			'link'   => '3e69dc',
			'url'    => '3e69dc',
		);
	}

	// Add print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'shoreditch_wpcom_setup' );

/**
 * Enqueue wp.com-specific styles.
 */
function shoreditch_wpcom_styles() {
	wp_enqueue_style( 'shoreditch-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160405' );
}
add_action( 'wp_enqueue_scripts', 'shoreditch_wpcom_styles' );

/**
 * Remove the widont filter.
 */
function shoreditch_wido() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'shoreditch_wido' );
