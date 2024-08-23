<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Grammer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Grammer
 * @since Grammer 1.0
 */


if ( ! function_exists( 'grammer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Grammer 1.0
	 *
	 * @return void
	 */
	function grammer_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'grammer' );
	}

endif;

add_action( 'after_setup_theme', 'grammer_support' );

if ( ! function_exists( 'grammer_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Grammer 1.0
	 *
	 * @return void
	 */
	function grammer_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'grammer-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'grammer-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'grammer_styles' );