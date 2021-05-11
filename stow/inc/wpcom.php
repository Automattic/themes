<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Stow
 */
require_once get_template_directory() . '/inc/wpcom-colors-css-variables.php';
/**
 * Bind JS handlers to instantly live-preview changes.
 */
function stow_wpcom_color_annotations_preview_js() {
	wp_enqueue_script( 'stow_wpcom_color_annotations_preview', get_template_directory_uri() . '/inc/color-annotations-preview.js', array( 'customize-preview' ), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'customize_preview_init', 'stow_wpcom_color_annotations_preview_js' ); 