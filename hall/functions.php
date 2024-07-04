<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Hall functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hall
 * @since Hall 1.0
 */


if ( ! function_exists( 'hall_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Hall 1.0
	 *
	 * @return void
	 */
	function hall_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'hall' );
	}

endif;

add_action( 'after_setup_theme', 'hall_support' );

if ( ! function_exists( 'hall_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Hall 1.0
	 *
	 * @return void
	 */
	function hall_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hall-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hall-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hall_styles' );
