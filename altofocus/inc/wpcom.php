<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package AltoFocus
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function altofocus_wpcom_setup() {

	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {

		$themecolors = array(
			'bg'     => '#ffffff',
			'border' => '#e38900',
			'text'   => '',
			'link'   => '',
			'url'    => '',
		);
	}

	// Add Print styles
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'altofocus_wpcom_setup' );

/**
 * Reset a custom background arguments for WP.com to use the default callback.
 */
function altofocus_wpcom_custom_background_args( $args ) {

	$args = array(
		'default-attachment' => 'fixed',
		'default-color'      => 'ffffff',
		'default-image'      => '',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-repeat'     => 'no-repeat',
		'default-size'       => 'auto',
		'wp-head-callback'   => '_custom_background_cb'
	);

	return $args;
}
add_filter( 'altofocus_custom_background_args', 'altofocus_wpcom_custom_background_args' );

/**
 * De-queue Google fonts if custom fonts are being used instead
 */
function altofocus_dequeue_fonts() {

	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {

		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {

			wp_dequeue_style( 'altofocus-libre-baskerville' );
			wp_dequeue_style( 'altofocus-karla' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'altofocus_dequeue_fonts' );

/**
 * WordPress.com specific styles
 */
function altofocus_wpcom_styles() {

	wp_enqueue_style( 'altofocus-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20170303' );
}
add_action( 'wp_enqueue_scripts', 'altofocus_wpcom_styles' );
