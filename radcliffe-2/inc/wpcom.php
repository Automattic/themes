<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Radcliffe 2
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function radcliffe_2_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => '222222',
			'text'   => '222222',
			'link'   => 'ca2017',
			'url'    => 'ca2017',
		);
	}

	add_theme_support( 'print-styles' );
}
add_action( 'after_setup_theme', 'radcliffe_2_wpcom_setup' );

/*
 * De-queue Google fonts if custom fonts are being used instead
 */
function radcliffe_2_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts && $customfonts['site-title']['id'] && $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'radcliffe-2-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'radcliffe_2_dequeue_fonts' );

/**
 * Enqueue WordPress.com-specific styles.
 */
function radcliffe_2_wpcom_styles() {
	wp_enqueue_style( 'radcliffe-2-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20170718' );
}
add_action( 'wp_enqueue_scripts', 'radcliffe_2_wpcom_styles' );

if ( defined( 'IS_WPCOM' ) && IS_WPCOM ) :
	/**
	 * WordPress.com-specific.
	 * Track the clicks for certain theme features.
	 */
	function radcliffe_2_wpcom_customize_controls_js() {
		if ( is_automattician() ) {
			return;
		}

		wp_enqueue_script( 'radcliffe-2-wpcom-customizer', get_template_directory_uri() . '/inc/wpcom-customizer.js', array( 'jquery', 'customize-controls' ), '1.0', true );
	}
	add_action( 'customize_controls_enqueue_scripts', 'radcliffe_2_wpcom_customize_controls_js' );
endif;

/**
* Disabling Widont filter for titles
*/
function radcliffe_2_wido() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'radcliffe_2_wido' );
