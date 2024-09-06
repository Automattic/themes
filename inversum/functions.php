<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Inversum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inversum
 * @since Inversum 1.0
 */


if ( ! function_exists( 'inversum_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Inversum 1.0
	 *
	 * @return void
	 */
	function inversum_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'inversum' );
	}

endif;

add_action( 'after_setup_theme', 'inversum_support' );

if ( ! function_exists( 'inversum_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Inversum 1.0
	 *
	 * @return void
	 */
	function inversum_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'inversum-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'inversum-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'inversum_styles' );
