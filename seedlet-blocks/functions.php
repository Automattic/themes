<?php
/**
 * Seedlet Blocks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage seedlet_blocks
 * @since 1.0.0
 */

if ( ! function_exists( 'seedlet_blocks_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function seedlet_blocks_setup() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'seedlet_blocks_setup', 999 );

/**
 * Enqueue scripts and styles.
 */
function seedlet_blocks_enqueue() {
	wp_enqueue_style( 'seedlet-blocks-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'seedlet_blocks_enqueue' );