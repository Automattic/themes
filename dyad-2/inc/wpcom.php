<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Dyad
 */

/**
 * Enqueue WordPress.com-specific styles
 */
function dyad_2_wpcom_styles() {
	wp_enqueue_style( 'dyad-2-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20151023' );
}
add_action( 'wp_enqueue_scripts', 'dyad_2_wpcom_styles' );

/**
 * Disabling Widont filter for titles
 */
function dyad_2_wido() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'dyad_2_wido' );

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function dyad_2_wpcom_setup() {
	global $themecolors;
	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'c0c9d3',
			'text'   => '6a6c6e',
			'link'   => '6a6c6e',
			'url'    => '6a6c6e',
		);
	}

	// Add print styles
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'dyad_2_wpcom_setup' );
