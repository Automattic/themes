<?php declare( strict_types = 1 ); ?>
<?php
/**
 * The Jazzers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The Jazzers
 * @since The Jazzers 1.0
 */


if ( ! function_exists( 'the_jazzers_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since The Jazzers 1.0
	 *
	 * @return void
	 */
	function the_jazzers_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'the-jazzers' );
	}

endif;

add_action( 'after_setup_theme', 'the_jazzers_support' );

if ( ! function_exists( 'the_jazzers_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since The Jazzers 1.0
	 *
	 * @return void
	 */
	function the_jazzers_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'the-jazzers-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'the-jazzers-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'the_jazzers_styles' );
