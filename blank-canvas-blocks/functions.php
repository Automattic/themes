<?php
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
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
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
			$font_families[] = 'Fira Sans:ital,wght@0,400;0,500;1,400';
		}

		if ( 'off' !== $playfair_display ) {
			$font_families[] = 'Playfair Display:ital,wght@0,400;0,700;1,400';
		}

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 *
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}
