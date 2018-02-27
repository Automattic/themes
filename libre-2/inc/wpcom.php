<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Libre 2
 */

/**
 * Adds support for WP.com print styles and $themecolors
 */
function libre_2_theme_support() {

    global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => '404040',
			'text'   => '404040',
			'link'   => '404040',
			'url'    => '404040',
		);
	endif;

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'libre_2_theme_support' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function libre_2_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'libre-2-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'libre_2_dequeue_fonts' );

//WordPress.com specific styles
function libre_2_wpcom_styles() {
	wp_enqueue_style( 'libre-2-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20150624' );
}
add_action( 'wp_head', 'libre_2_wpcom_styles', 2 );
