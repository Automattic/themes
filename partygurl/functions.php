<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Partygurl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Partygurl
 * @since Partygurl 1.0
 */


if ( ! function_exists( 'partygurl_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Partygurl 1.0
	 *
	 * @return void
	 */
	function partygurl_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'partygurl' );
	}

endif;

add_action( 'after_setup_theme', 'partygurl_support' );

if ( ! function_exists( 'partygurl_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Partygurl 1.0
	 *
	 * @return void
	 */
	function partygurl_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'partygurl-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'partygurl-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'partygurl_styles' );
