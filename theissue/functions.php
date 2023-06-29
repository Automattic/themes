<?php
/**
 * thetheissue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thetheissue
 * @since thetheissue 1.0
 */


if ( ! function_exists( 'thetheissue_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since thetheissue 1.0
	 *
	 * @return void
	 */
	function thetheissue_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'thetheissue' );
	}

endif;

add_action( 'after_setup_theme', 'thetheissue_support' );

if ( ! function_exists( 'thetheissue_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since thetheissue 1.0
	 *
	 * @return void
	 */
	function thetheissue_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'thetheissue-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'thetheissue-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'thetheissue_styles' );
