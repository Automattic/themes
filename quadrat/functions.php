<?php

if ( ! function_exists( 'quadrat_support' ) ) :
	function quadrat_support()  {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			quadrat_fonts_url(),
			get_template_directory() . '/assets/ponyfill.css',
			get_stylesheet_uri()
		) );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );

    }
    add_action( 'after_setup_theme', 'quadrat_support' );
endif;

/**
 * Add Google webfonts
 *
 * @return value
 */
function quadrat_fonts_url() {
	$fonts_url = '';

	$font_families   = array();
	$font_families[] = 'family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	$fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );

	return $fonts_url;
}

/**
 * 
 * Enqueue scripts and styles.
 */
function quadrat_scripts() {
	wp_enqueue_style( 'quadrat-fonts', quadrat_fonts_url(), array(), null );
	wp_enqueue_style( 'quadrat-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' )  );
}
add_action( 'wp_enqueue_scripts', 'quadrat_scripts', 11 );

/**
 * Block patterns
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';