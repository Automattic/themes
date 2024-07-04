<?php declare( strict_types = 1 ); ?>
<?php
/**
 * OutNow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OutNow
 * @since OutNow 1.0
 */


if ( ! function_exists( 'outnow_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since OutNow 1.0
	 *
	 * @return void
	 */
	function outnow_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'outnow' );
	}

endif;

add_action( 'after_setup_theme', 'outnow_support' );

if ( ! function_exists( 'outnow_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since OutNow 1.0
	 *
	 * @return void
	 */
	function outnow_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'outnow-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'outnow-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'outnow_styles' );
