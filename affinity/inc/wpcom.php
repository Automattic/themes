<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Affinity
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function affinity_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'e8e9ea',
			'text'   => '1e1c1b',
			'link'   => '99908a',
			'url'    => '99908a',
		);
	}

	add_theme_support( 'print-styles' );
}
add_action( 'after_setup_theme', 'affinity_wpcom_setup' );

//WordPress.com specific styles
function affinity_wpcom_styles() {
	wp_enqueue_style( 'affinity-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160411' );
}
add_action( 'wp_enqueue_scripts', 'affinity_wpcom_styles' );
