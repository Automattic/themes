<?php
if ( ! function_exists( 'blank_canvas_blocks_support' ) ) :
	function blank_canvas_blocks_support() {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for responsive embedded content.
		// https://github.com/WordPress/gutenberg/issues/26901
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/ponyfill.css',
			)
		);
	}
	add_action( 'after_setup_theme', 'blank_canvas_blocks_support' );
endif;

/**
 *
 * Enqueue scripts and styles.
 */
function blank_canvas_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			blank_canvas_blocks_fonts_url(),
		)
	);
}
add_action( 'admin_init', 'blank_canvas_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function blank_canvas_blocks_scripts() {
	// Enqueue Google fonts
	wp_enqueue_style( 'blank-canvas-blocks-fonts', blank_canvas_blocks_fonts_url(), array(), null );
	wp_enqueue_style( 'blank_canvas_blocks-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'blank_canvas_blocks_scripts' );

/**
 * Add Google webfonts
 *
 * @return $fonts_url
 */

function blank_canvas_blocks_fonts_url() {
	if ( ! class_exists( 'WP_Theme_JSON_Resolver_Gutenberg' ) ) {
		return '';
	}

	$theme_data = WP_Theme_JSON_Resolver_Gutenberg::get_merged_data()->get_settings();
	if ( empty( $theme_data ) || empty( $theme_data['custom'] ) ) {
		return '';
	}

	$custom_data = $theme_data['custom'];
	if ( ! array_key_exists( 'fontsToLoadFromGoogle', $custom_data ) ) {
		return '';
	}

	$font_families   = $theme_data['custom']['fontsToLoadFromGoogle'];
	$font_families[] = 'display=swap';

	// Make a single request for the theme fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', $font_families ) );
}
