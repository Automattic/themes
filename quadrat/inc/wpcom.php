<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Quadrat
 */


/**
 * Enqueue our WP.com styles for front-end.
 * Loads after theme styles so we can add overrides.
 */
function quadrat_wpcom_scripts() {
	wp_enqueue_style( 'quadrat-wpcom-style', get_stylesheet_directory_uri() . '/inc/wpcom-style.css', array( 'quadrat-styles' ) );
}
add_action( 'wp_enqueue_scripts', 'quadrat_wpcom_scripts' );

