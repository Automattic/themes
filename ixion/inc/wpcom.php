<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Ixion
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */


function ixion_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'eeece8',
			'text'   => '192930',
			'link'   => 'd7b221',
			'url'    => 'd7b221',
		);
	}

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'ixion_wpcom_setup' );

//WordPress.com specific styles
function ixion_wpcom_styles() {
	wp_enqueue_style( 'ixion-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20161017' );
}
add_action( 'wp_enqueue_scripts', 'ixion_wpcom_styles' );

// Remove the widont filter because of the limited space for post/page title in the design
function ixion_wido() {
    remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'ixion_wido' );
