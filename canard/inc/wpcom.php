<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Canard
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function canard_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '222222',
			'link'   => 'd11415',
			'url'    => 'd11415',
		);
	}

	// Add print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'canard_wpcom_setup' );

/**
 * Enqueue wp.com-specific styles
 */
function canard_wpcom_styles() {
	wp_enqueue_style( 'canard-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20150423' );
}
add_action( 'wp_enqueue_scripts', 'canard_wpcom_styles' );

/**
 * De-queue Google fonts if custom fonts are being used instead.
 */
function canard_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'canard-pt-serif-playfair-display' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'canard_dequeue_fonts' );

/**
 * Remove the widont filter.
 */
function canard_wido() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'canard_wido' );
