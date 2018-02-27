<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Toujours
 */

/**
 * Adds themecolors and support for print styles
 */
function toujours_theme_support() {

	global $themecolors;

	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg'     => 'eeeeee',
			'border' => 'eeeeee',
			'text'   => '333333',
			'link'   => '2590ec',
			'url'    => '2590ec',
		);
	endif;

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'toujours_theme_support' );


/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function toujours_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'toujours-fonts' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'toujours_dequeue_fonts' );


//WordPress.com specific styles
function toujours_wpcom_styles() {
	wp_enqueue_style( 'toujours-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20151223' );
}
add_action( 'wp_enqueue_scripts', 'toujours_wpcom_styles' );
