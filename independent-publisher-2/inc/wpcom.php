<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Independent_Publisher_2
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function independent_publisher_2_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '000000',
			'link'   => '0087be',
			'url'    => '0087be',
		);
	}

	// Add print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'independent_publisher_2_wpcom_setup' );

/**
 * WordPress.com specific styles
 */
function independent_publisher_2_wpcom_styles() {
	wp_enqueue_script( 'independent-publisher-2-wpcom-functions', get_template_directory_uri() . '/inc/script-wpcom.js', array(), '20210111', true );
	wp_enqueue_style( 'independent-publisher-2-wpcom-style', get_template_directory_uri() . '/inc/style-wpcom.css', '20150827' );
}
add_action( 'wp_enqueue_scripts', 'independent_publisher_2_wpcom_styles' );
