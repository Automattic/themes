<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Illustratr
 */

/*
 * De-queue Google fonts if custom fonts are being used instead.
 */
function illustratr_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'illustratr-source-sans-pro' );
			wp_dequeue_style( 'illustratr-pt-serif' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'illustratr_dequeue_fonts' );

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 * @return void
 */
function illustratr_add_wpcom_support() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'f1f2f3',
			'text'   => '7f8d8c',
			'link'   => 'e06d5e',
			'url'    => 'e06d5e',
		);
	}

	// Add print stylesheet.
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'illustratr_add_wpcom_support' );

/**
 * Enqueue wp.com-specific styles
 */
function illustratr_wpcom_styles() {
	wp_enqueue_style( 'illustratr-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20140328' );
}
add_action( 'wp_enqueue_scripts', 'illustratr_wpcom_styles' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function illustratr_wpcom_body_classes( $classes ) {

	//Add a class of widgets-hidden if the sidebar is active for Direct Manipulation
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'widgets-hidden';
	}

	return $classes;
}
add_filter( 'body_class', 'illustratr_wpcom_body_classes' );
