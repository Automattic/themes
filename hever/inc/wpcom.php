<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Hever
 */
require_once get_template_directory() . '/inc/wpcom-colors-css-variables.php';
/**
 * Bind JS handlers to instantly live-preview changes.
 */
function hever_wpcom_color_annotations_preview_js() {
	wp_enqueue_script( 'hever_wpcom_color_annotations_preview', get_template_directory_uri() . '/inc/color-annotations-preview.js', array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'hever_wpcom_color_annotations_preview_js' ); 