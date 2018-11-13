<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Intergalactic 2
 */

function intergalactic_2_theme_colors() {
	global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg' => 'ffffff',
			'border' => 'cccccc',
			'text' => '000000',
			'link' => '222222',
			'url' => '222222',
		);
	endif;

	// Add WP.com print styles
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'intergalactic_2_theme_colors' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function intergalactic_2_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );
		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'intergalactic-lato' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'intergalactic_2_dequeue_fonts' );

/* WordPress.com specific styles */

function intergalactic_2_wpcom_styles() {
	wp_enqueue_style( 'intergalactic-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '090414' );
}
add_action( 'wp_enqueue_scripts', 'intergalactic_2_wpcom_styles' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function intergalactic_2_wpcom_body_classes( $classes ) {

	//Add a class of widgets-hidden if the sidebar is active for Direct Manipulation
	if ( is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'widgets-hidden';
	}

	return $classes;
}
add_filter( 'body_class', 'intergalactic_2_wpcom_body_classes' );

/**
* Make sure background colours work for users without Custom Colours.
*
*/
function intergalactic_2_background_fix() {
	$background_color = get_theme_mod( 'background_color','ffffff' );
	$background_styles = '.entry-content-wrapper {';
	$background_styles .= 'background-color: #' . $background_color . '; ';
	$background_styles .= '}';

	wp_add_inline_style( 'intergalactic-2-style', $background_styles );
}
add_action( 'wp_enqueue_scripts', 'intergalactic_2_background_fix' );
