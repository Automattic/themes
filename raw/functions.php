<?php declare( strict_types = 1 ); ?>
<?php
/**
 * RAW functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RAW
 * @since RAW 1.0
 */


if ( ! function_exists( 'rawsecond_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since RAW 1.0
	 *
	 * @return void
	 */
	function rawsecond_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'rawsecond' );
	}

endif;

add_action( 'after_setup_theme', 'rawsecond_support' );

if ( ! function_exists( 'rawsecond_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since RAW 1.0
	 *
	 * @return void
	 */
	function rawsecond_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'rawsecond-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'rawsecond-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'rawsecond_styles' );
