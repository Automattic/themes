<?php

if ( ! function_exists( 'fewer_support' ) ) :
	function fewer_support() {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for featured image
		add_theme_support( 'post-thumbnails' );

		// Add support for custom spacing
		add_theme_support('custom-spacing');

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			fewer_fonts_url(),
		) );
	}
	add_action( 'after_setup_theme', 'fewer_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function fewer_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'fewer-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'fewer-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue Google fonts, if necessary.
	wp_enqueue_style( 'fewer-fonts', fewer_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'fewer_scripts' );

/**
 * Add Google webfonts, if necessary.
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function fewer_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Epilogue, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$epilogue = esc_html_x( 'on', 'Epilogue font: on or off', 'fewer' );

	if ( 'off' !== $epilogue ) {
		$font_families = array();

		$font_families[] = 'Epilogue:300,300i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
