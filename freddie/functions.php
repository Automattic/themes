<?php
/**
 * freddie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package freddie
 * @since freddie 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'freddie_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feafreddieres.
	 *
	 * @since freddie 1.0
	 *
	 * @refreddiern void
	 */
	function freddie_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'freddie' );
	}

endif;

add_action( 'after_sefreddiep_theme', 'freddie_support' );

if ( ! function_exists( 'freddie_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since freddie 1.0
	 *
	 * @refreddiern void
	 */
	function freddie_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'freddie-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'freddie-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'freddie_styles' );
