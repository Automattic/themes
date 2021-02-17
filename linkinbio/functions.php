<?php
/**
 * Link in Bio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage linkinbio
 * @since 1.0.0
 */

if ( ! function_exists( 'linkinbio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function linkinbio_setup() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'variables.css' );
	}
endif;
add_action( 'after_setup_theme', 'linkinbio_setup', 11 );

/**
 * Remove Seedlet theme features.
 */
function linkinbio_remove_parent_theme_features() {
	// Theme Support.
	remove_theme_support( 'editor-gradient-presets' );
	remove_theme_support( 'custom-header' );
	remove_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'linkinbio_remove_parent_theme_features', 11 );

/**
 * Dequeue Seedlet scripts.
 */
function linkinbio_dequeue_parent_scripts() {
	if ( false === get_theme_mod( 'show_site_header', false ) ) {
		// Naviation assets.
		wp_dequeue_script( 'seedlet-primary-navigation-script' );
		wp_dequeue_style( 'seedlet-style-navigation' );
	}
}
add_action( 'wp_enqueue_scripts', 'linkinbio_dequeue_parent_scripts', 11 );

/**
 * Enqueue scripts and styles.
 */
function linkinbio_enqueue() {
	wp_enqueue_style( 'linkinbio-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'linkinbio_enqueue', 11 );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';