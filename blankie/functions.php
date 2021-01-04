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
 * Enqueue scripts and styles.
 */
function blankie_enqueue() {
	wp_enqueue_style( 'blankie-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blankie_enqueue', 11 );