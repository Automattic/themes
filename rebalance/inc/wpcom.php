<?php
/**
 * Scripts specific for wordpress.com
 *
 * @package Rebalance
 */

function rebalance_wpcom_setup() {

	global $themecolors;
	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 * @since Underscores.me 1.0
	 */
	$themecolors = array(
		'bg'     => '#ffffff',
		'border' => '#000000',
		'text'   => '#000000',
		'link'   => '#f35029',
		'url'    => '',
	);

	/**
	 * Add Print styles
	 */
	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'rebalance_wpcom_setup' );

/**
 * Enqueue wp.com-specific styles
 */
function rebalance_wpcom_styles() {
	wp_enqueue_style( 'rebalance-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '20160418' );
}
add_action( 'wp_enqueue_scripts', 'rebalance_wpcom_styles' );

/**
 * De-queue Google fonts if custom fonts are being used instead.
 */
function rebalance_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'rebalance-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'rebalance_dequeue_fonts' );

