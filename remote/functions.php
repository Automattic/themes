<?php
/**
 * Remote functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Remote
 * @since Remote 1.0
 */


if ( ! function_exists( 'remote_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'remote_support' );

if ( ! function_exists( 'remote_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Remote 1.0
	 *
	 * @return void
	 */
	function remote_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'remote-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'remote-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'remote_styles' );

/**
 * Block Patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';
