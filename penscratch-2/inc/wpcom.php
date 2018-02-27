<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Penscratch 2
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function penscratch_2_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'eeeeee',
			'border' => 'eeeeee',
			'text'   => '666666',
			'link'   => '1c7c7c',
			'url'    => '1c7c7c',
		);
	}

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'penscratch_2_wpcom_setup' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function penscratch_2_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'penscratch-2-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'penscratch_2_dequeue_fonts' );

//WordPress.com specific styles
function penscratch_2_wpcom_styles() {
	wp_enqueue_style( 'penscratch-2-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160224' );
}
add_action( 'wp_enqueue_scripts', 'penscratch_2_wpcom_styles' );
