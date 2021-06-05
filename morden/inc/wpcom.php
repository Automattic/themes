<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Morden
 */
require_once get_template_directory() . '/inc/wpcom-colors-css-variables.php';
/**
 * Bind JS handlers to instantly live-preview changes.
 */
function morden_wpcom_color_annotations_preview_js() {
	wp_enqueue_script( 'morden_wpcom_color_annotations_preview', get_template_directory_uri() . '/inc/color-annotations-preview.js', array( 'customize-preview' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'customize_preview_init', 'morden_wpcom_color_annotations_preview_js' );
