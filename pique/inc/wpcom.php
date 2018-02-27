<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Pique
 */

/**
 * Adds support for WP.com print styles and responsive videos
 */
function pique_theme_support() {
	global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg'     => 'fcfbf9',
			'border' => 'c2beb9',
			'text'   => '666666',
			'link'   => '83b6cc',
			'url'    => '83b6cc',
		);
	endif;

	// Add support for print styles
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'pique_theme_support' );

/**
 * Enqueue a WordPress.com-specific stylesheet
 */
function pique_wpcom_styles() {
	wp_enqueue_style( 'pique-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20151008' );
}
add_action( 'wp_enqueue_scripts', 'pique_wpcom_styles' );

/**
 * De-queue Google fonts if custom fonts are being used instead.
 */
function pique_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'pique-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'pique_dequeue_fonts' );
