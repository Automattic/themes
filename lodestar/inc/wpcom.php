<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Lodestar
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function lodestar_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '333333',
			'link'   => '999999',
			'url'    => '999999',
		);
	}

	// Add print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'lodestar_wpcom_setup' );

/**
 * Enqueue wp.com-specific styles
 */
function lodestar_wpcom_styles() {
	wp_enqueue_style( 'lodestar-wpcom', get_template_directory_uri() . '/inc/wpcom-style.css', '20160708' );
}
add_action( 'wp_enqueue_scripts', 'lodestar_wpcom_styles' );

/**
 * Make sure any old assigned Jetpack logos are moved over to the Core logo spot.
 */
function lodestar_move_logo() {
	if ( current_theme_supports( 'custom-logo' ) && ! get_theme_mod( 'custom_logo' ) && $jp_logo = get_option( 'site_logo' ) ) {
		set_theme_mod( 'custom_logo', $jp_logo );
	}
}
add_action( 'init', 'lodestar_move_logo' );
