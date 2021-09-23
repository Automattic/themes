<?php

/**
 * Add Editor Styles
 */
function newtheme_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
	
	// Primary navigation is used on the header and the footer pattern
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'videomaker' ),
			'social' => __( 'Social Navigation', 'videomaker' ),
			'footer' => __( 'Footer Navigation', 'videomaker' )
		)
	);
}
add_action( 'after_setup_theme', 'newtheme_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function newtheme_scripts() {
	wp_enqueue_style( 'newtheme-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'newtheme_scripts' );
