<?php

$theme_json = json_decode( file_get_contents( get_stylesheet_directory() . '/experimental-theme.json'), true );

if ( ! function_exists( 'blank_canvas_blocks_support' ) ) :
	function blank_canvas_blocks_support()  {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		// https://github.com/WordPress/gutenberg/issues/26901
		add_theme_support( 'responsive-embeds' );

		// Add support for "reasonable default" block styles
		add_theme_support( 'wp-block-styles');

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			blank_canvas_blocks_fonts_url(),
			'/assets/ponyfill.css'
		) );

    }
    add_action( 'after_setup_theme', 'blank_canvas_blocks_support' );
endif;

/**
 *
 * Enqueue scripts and styles.
 */
function blank_canvas_blocks_scripts() {
	// Enqueue Google fonts
	wp_enqueue_style( 'blank-canvas-blocks-fonts', blank_canvas_blocks_fonts_url(), array(), null );

	wp_enqueue_style( 'blank_canvas_blocks-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' )  );
}
add_action( 'wp_enqueue_scripts', 'blank_canvas_blocks_scripts', 11 );

/**
 * Add Google webfonts
 *
 * @return $fonts_url
 */

function blank_canvas_blocks_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Fira Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$fira_sans = esc_html_x( 'on', 'Fira Sans: on or off', 'blank-canvas-blocks' );

	/* Translators: If there are characters in your language that are not
	* supported by Playfair Display, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$playfair_display = esc_html_x( 'on', 'Playfair Display: on or off', 'blank-canvas-blocks' );

	if ( 'off' !== $fira_sans || 'off' !== $playfair_display ) {
		$font_families = array();

		if ( 'off' !== $fira_sans ) {
			$font_families[] = 'family=Fira Sans:ital,wght@0,400;0,500;1,400';
		}

		if ( 'off' !== $playfair_display ) {
			$font_families[] = 'family=Playfair Display:ital,wght@0,400;0,700;1,400';
		}

		$font_families = apply_filters( 'included_google_font_families', $font_families );
		$font_families[] = 'display=swap';

		// Make a single request for the theme fonts.
		$fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );
	}

	return esc_url_raw( $fonts_url );
}
