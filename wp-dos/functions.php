<?php declare( strict_types = 1 ); ?>
<?php
/**
 * WP-DOS functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP-DOS
 * @since WP-DOS 1.0
 */


if ( ! function_exists( 'wp_dos_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since WP-DOS 1.0
	 *
	 * @return void
	 */
	function wp_dos_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'wp-dos' );
	}

endif;

add_action( 'after_setup_theme', 'wp_dos_support' );

if ( ! function_exists( 'wp_dos_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since WP-DOS 1.0
	 *
	 * @return void
	 */
	function wp_dos_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'wp-dos-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'wp-dos-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wp_dos_styles' );
