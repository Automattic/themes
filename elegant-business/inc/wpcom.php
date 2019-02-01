<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Elegant_Business
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function elegant_business_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.

	/*
	 * These colors match the parent theme’s blue default
	 *
	 * To introduce a non-blue color as the default, we’d
	 * need to set the Custom Colors customizer option on
	 * theme activation and also change the default hex
	 * color here.
	 */
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => '767676',
			'text'   => '111111',
			'link'   => '0073aa',
			'url'    => '0073aa',
		);
	}
}
add_action( 'after_setup_theme', 'elegant_business_wpcom_setup' );
