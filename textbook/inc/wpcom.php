<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package TextBook
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function textbook_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'f0eeec',
			'border' => '259275',
			'text'   => '222222',
			'link'   => 'b23f33',
			'url'    => '7c6c9e',
		);
	}
}
add_action( 'after_setup_theme', 'textbook_wpcom_setup' );

/**
 * De-enqueue Google fonts if custom fonts are being used instead.
 */
function textbook_dequeue_fonts() {
	if ( class_exists( 'TypekitData' ) && class_exists( 'CustomDesign' ) && CustomDesign::is_upgrade_active() ) {
		$customfonts = TypekitData::get( 'families' );

		if ( $customfonts['headings']['id'] && $customfonts['body-text']['id'] ) {
			wp_dequeue_style( 'textbook-fonts' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'textbook_dequeue_fonts' );

/**
 * Remove the widont filter because of the limited space for post/page title in the design.
 */
function textbook_widont_filter() {
	remove_filter( 'the_title', 'widont' );
}
add_action( 'init', 'textbook_widont_filter' );