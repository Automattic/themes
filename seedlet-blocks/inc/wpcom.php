<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Seedlet_Blocks
 */


/**
 * Enqueue our WP.com styles for front-end.
 * Loads after theme styles so we can add overrides.
 */
function seedlet_blocks_wpcom_scripts() {
	wp_enqueue_style( 'seedlet_blocks-wpcom-style', get_stylesheet_directory_uri() . '/inc/wpcom-style.css', array( 'seedlet_blocks-styles' ) );
}
add_action( 'wp_enqueue_scripts', 'seedlet_blocks_wpcom_scripts' );

