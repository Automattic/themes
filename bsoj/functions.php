<?php
/**
 * BSoJ functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BSoJ
 * @since BSoJ 1.0
 */


if ( ! function_exists( 'bsoj_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since BSoJ 1.0
	 *
	 * @return void
	 */
	function bsoj_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bsoj' );
	}

endif;

add_action( 'after_setup_theme', 'bsoj_support' );

if ( ! function_exists( 'bsoj_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since BSoJ 1.0
	 *
	 * @return void
	 */
	function bsoj_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bsoj-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bsoj-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bsoj_styles' );
