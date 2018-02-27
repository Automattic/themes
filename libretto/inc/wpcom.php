<?php
/**
* WordPress.com-specific functions and definitions.
*
* This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
*
* @package Libretto
*/


/**
* Adds support for wp.com-specific theme functions.
*
* @global array $themecolors
*/
function libretto_wpcom_setup() {
	global $themecolors;
	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
		'bg'     => 'eae9e6',
		'text'   => '363431',
		'link'   => '932817',
		'border' => 'd9d6d0',
		'url'    => '787065',
		);
	endif;

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'libretto_wpcom_setup' );

// Load WordPress.com-specific styles
function libretto_wpcom_styles() {
	wp_enqueue_style( 'libretto-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20150709' );
}
add_action( 'wp_head', 'libretto_wpcom_styles', 99 );
