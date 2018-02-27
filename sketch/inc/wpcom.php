<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Sketch
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function sketch_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'eeeeee',
			'text'   => '333333',
			'link'   => 'e8713d',
			'url'    => 'e8713d',
		);
	}
}
add_action( 'after_setup_theme', 'sketch_wpcom_setup' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function sketch_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'sketch-lato' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'sketch_dequeue_fonts' );

//WordPress.com specific styles
function sketch_wpcom_styles() {
	wp_enqueue_style( 'sketch-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '060214' );
}
add_action( 'wp_enqueue_scripts', 'sketch_wpcom_styles' );

/**
 * Adds support for WP.com print styles
 */
function sketch_theme_support() {
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'sketch_theme_support' );
