<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Alves
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function alves_wpcom_setup() {
	global $themecolors;

	// Set theme colors for third party services.
	if ( ! isset( $themecolors ) ) {
		$themecolors = array(
			'bg'     => 'ffffff', // $config-global--color-background-default
			'border' => '3E7D98', // $config-global--color-border-default
			'text'   => '394d55', // $config-global--color-foreground-default
			'link'   => '3E7D98', // $config-global--color-primary-default
			'url'    => '3E7D98', // $config-global--color-primary-default
		);
	}
}
add_action( 'after_setup_theme', 'alves_wpcom_setup' );
