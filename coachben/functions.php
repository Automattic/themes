<?php
/**
 * CoachBen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CoachBen
 * @since CoachBen 1.0
 */


if ( ! function_exists( 'coachben_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since CoachBen 1.0
	 *
	 * @return void
	 */
	function coachben_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'coachben' );
	}

endif;

add_action( 'after_setup_theme', 'coachben_support' );

if ( ! function_exists( 'coachben_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since CoachBen 1.0
	 *
	 * @return void
	 */
	function coachben_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'coachben-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'coachben-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'coachben_styles' );
