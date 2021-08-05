<?php

/**
 * Add Editor Styles
 */
function stewart_support() {

	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);

	// This theme has one menu location.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'stewart' ),
		)
	);

}
add_action( 'after_setup_theme', 'stewart_support' );

/**
 *
 * Enqueue scripts and styles.
 */
function stewart_scripts() {
	wp_enqueue_style( 'stewart-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'stewart_scripts' );
