<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Karuna
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function karuna_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '333333',
			'link'   => '6636cc',
			'url'    => '6636cc',
		);
	}

	add_theme_support( 'print-styles' );
}
add_action( 'after_setup_theme', 'karuna_wpcom_setup' );


/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function karuna_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'karuna-fonts' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'karuna_dequeue_fonts' );


//WordPress.com specific styles
function karuna_wpcom_styles() {
	wp_enqueue_style( 'karuna-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160607' );
}
add_action( 'wp_enqueue_scripts', 'karuna_wpcom_styles' );
