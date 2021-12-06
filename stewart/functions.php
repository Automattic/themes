<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function stewart_support() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );

	// Enqueue editor styles.
	add_editor_style( 
		array(
			stewart_fonts_url(),
			'style.css',
		)
	);
}
add_action( 'after_setup_theme', 'stewart_support' );


/**
 * Enqueue styles.
 */
function stewart_styles() {

	// Register theme stylesheet.
	wp_register_style(
		'stewart-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'stewart-style' );

	// Enqueue Google fonts
	wp_enqueue_style( 'seedlet-fonts', stewart_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'stewart_styles' );


/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function stewart_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Work Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$work_sans = esc_html_x( 'on', 'Work Sans: on or off', 'stewart' );

	if ( 'off' !== $work_sans ) {
		$font_families = 'Work+Sans:ital,wght@0,400;0,700;1,400;1,700';

		$query_args = array(
			'family' => $font_families,
			'subset' => 'latin,latin-ext',
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
