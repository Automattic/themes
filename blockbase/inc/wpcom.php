<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Blockbase
 */

/**
 * Enqueue our WP.com styles for front-end.
 * Loads after theme styles so we can add overrides.
 */
function blockbase_wpcom_scripts() {
	wp_enqueue_style( 'blockbase-wpcom-style', get_template_directory_uri() . '/inc/wpcom-style.css', array( 'blockbase-ponyfill' ) );
}
add_action( 'wp_enqueue_scripts', 'blockbase_wpcom_scripts' );

/**
 * Disable the Site Editor on WPCOM unless the user is opted in.
 */
function blockbase_wpcom_disable_site_editor() {
	if ( ! has_blog_sticker( 'core-site-editor-enabled', get_current_blog_id() ) ) {
		add_action( 'admin_menu_rest_api', 'blockbase_readd_legacy_admin_links' );
		add_action( 'admin_menu_rest_api', 'blockbase_remove_site_editor_admin_link' );
		add_action( 'admin_init', 'blockbase_readd_legacy_admin_links' );
		add_action( 'admin_init', 'blockbase_remove_site_editor_admin_link' );
	}
}
add_action( 'init', 'blockbase_wpcom_disable_site_editor' );
