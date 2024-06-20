<?php
/**
 * excerpts functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package excerpts
 * @since excerpts 1.0
 */


if ( ! function_exists( 'excerpts_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since excerpts 1.0
	 *
	 * @return void
	 */
	function excerpts_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'excerpts' );
	}

endif;

add_action( 'after_setup_theme', 'excerpts_support' );

if ( ! function_exists( 'excerpts_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since excerpts 1.0
	 *
	 * @return void
	 */
	function excerpts_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'excerpts-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'excerpts-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'excerpts_styles' );
