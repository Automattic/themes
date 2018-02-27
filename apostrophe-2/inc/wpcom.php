<?php
/**
* WordPress.com-specific functions and definitions.
*
* This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
*
* @package Apostrophe 2
*/


/**
* Adds support for wp.com-specific theme functions.
*
* @global array $themecolors
*/
function apostrophe_2_wpcom_setup() {
	global $themecolors;
	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg'     => 'ffffff',
			'text'   => '3a3a3a',
			'link'   => '117bb8',
			'border' => 'a0a0a0',
			'url'    => '117bb8',
		);
	endif;

	// Use standard print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'apostrophe_2_wpcom_setup' );

/**
 * Enqueue WordPress.com-specific styles
 */
function apostrophe_2_wpcom_styles() {
	wp_enqueue_style( 'apostrophe-2-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20170523' );
}
add_action( 'wp_enqueue_scripts', 'apostrophe_2_wpcom_styles' );

/**
 * Disabling Widont filter for titles
 */
function apostrophe_2_wido() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'apostrophe_2_wido' );