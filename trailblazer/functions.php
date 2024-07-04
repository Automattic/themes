<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Trailblazer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Trailblazer
 * @since Trailblazer 1.0
 */


if ( ! function_exists( 'trailblazer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Trailblazer 1.0
	 *
	 * @return void
	 */
	function trailblazer_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'trailblazer' );
	}

endif;

add_action( 'after_setup_theme', 'trailblazer_support' );

if ( ! function_exists( 'trailblazer_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Trailblazer 1.0
	 *
	 * @return void
	 */
	function trailblazer_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'trailblazer-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'trailblazer-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'trailblazer_styles' );