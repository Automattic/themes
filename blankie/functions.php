<?php
/**
 * Blankie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Blankie
 * @since 1.0
 */

if ( ! function_exists( 'blankie_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blankie_setup() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'variables.css' );
	}
endif;
add_action( 'after_setup_theme', 'blankie_setup', 11 );

/**
 * Remove Seedlet theme features.
 */
function blankie_remove_parent_theme_features() {

	// Theme Support
	remove_theme_support( 'custom-header' );
	remove_theme_support( 'custom-logo' );
	remove_theme_support( 'customize-selective-refresh-widgets' );

	// Navigation Areas
	unregister_nav_menu( 'primary' );
	unregister_nav_menu( 'footer' );
	unregister_nav_menu( 'social' );
}
add_action( 'after_setup_theme', 'blankie_remove_parent_theme_features', 10 );

/**
 * Enqueue scripts and styles.
 */
function blankie_enqueue() {
	wp_enqueue_style( 'blankie-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blankie_enqueue', 11 );