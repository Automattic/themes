<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Hever
 */


/**
 * Bind JS handlers to instantly live-preview changes.
 */
function hever_wpcom_customize_preview_js() {
	wp_enqueue_script( 'hever_wpcom_customize_preview', get_theme_file_uri( '/inc/customize-preview-wpcom.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'hever_wpcom_customize_preview_js' );