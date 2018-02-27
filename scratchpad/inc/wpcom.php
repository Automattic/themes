<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Scratchpad
 */
/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function scratchpad_wpcom_setup() {
	global $themecolors;
	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '777777',
			'link'   => '537375',
			'url'    => '537375',
		);
	}
}
add_action( 'after_setup_theme', 'scratchpad_wpcom_setup' );

/**
 * De-queue Google fonts if custom fonts are being used instead.
 *
 * @return void
 */
function scratchpad_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$custom_fonts = TypekitData::get( 'families' );
		if ( $custom_fonts && $custom_fonts['headings']['id'] && $custom_fonts['body-text']['id'] ) {
			wp_dequeue_style( 'scratchpad-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'scratchpad_dequeue_fonts' );
