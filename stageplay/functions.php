<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Stageplay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stageplay
 * @since Stageplay 1.0
 */


if ( ! function_exists( 'stageplay_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Stageplay 1.0
	 *
	 * @return void
	 */
	function stageplay_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'stageplay' );
	}

endif;

add_action( 'after_setup_theme', 'stageplay_support' );

if ( ! function_exists( 'stageplay_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Stageplay 1.0
	 *
	 * @return void
	 */
	function stageplay_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'stageplay-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'stageplay-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'stageplay_styles' );
