<?php
/**
 * Stage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stage
 * @since Stage 1.0
 */


if ( ! function_exists( 'stage_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Stage 1.0
	 *
	 * @return void
	 */
	function stage_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'stage' );
	}

endif;

add_action( 'after_setup_theme', 'stage_support' );

if ( ! function_exists( 'stage_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Stage 1.0
	 *
	 * @return void
	 */
	function stage_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'stage-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'stage-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'stage_styles' );
