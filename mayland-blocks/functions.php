<?php

if ( ! function_exists( 'mayland_blocks_support' ) ) :
	function mayland_blocks_support()  {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'style.css',
			mayland_blocks_fonts_url()
		) );
    }
    add_action( 'after_setup_theme', 'mayland_blocks_support' );
endif;

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function mayland_blocks_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'mayland' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		$font_families[] = 'Poppins:400,400i,600,600i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function mayland_blocks_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'mayland-blocks-styles', get_template_directory_uri() . '/style.css' );

	// Enqueue front-end styles.
	wp_enqueue_style( 'mayland-blocks-block-styles', get_template_directory_uri() . '/assets/alignments.css' );

	// Enqueue Google fonts, if necessary
	wp_enqueue_style( 'mayland-blocks-fonts', mayland_blocks_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'mayland_blocks_scripts' );
