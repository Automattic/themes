<?php

if ( ! function_exists( 'monticello_support' ) ) :
	function monticello_support() {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
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
		add_editor_style(
			array(
				monticello_fonts_url(),
				'style.css',
			)
		);
	}
	add_action( 'after_setup_theme', 'monticello_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function monticello_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'monticello-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'monticello-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue Google fonts, if necessary.
	wp_enqueue_style( 'monticello-fonts', monticello_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'monticello_scripts' );

function monticello_fonts_url() {
	$font_families = array();

	$font_families[] = 'family=Poppins:ital,wght@0,200;0,400;0,700;1,100;1,400;1,700';
	$font_families[] = 'family=Manuale:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	$fonts_url = 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families );

	return esc_url_raw( $fonts_url );
}

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';
