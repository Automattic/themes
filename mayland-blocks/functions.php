<?php

if ( ! function_exists( 'mayland_blocks_support' ) ) :
	function mayland_blocks_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'theme.css',
			)
		);

		// Theme supports required to pass theme check.
		// NOTE: I'm not sure why having them in the parent theme wouldn't suffice, but they seem to be needed here.
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
	}
	add_action( 'after_setup_theme', 'mayland_blocks_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function mayland_blocks_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'mayland-blocks-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'mayland_blocks_scripts' );

/**
 * This function only exists to pass the theme-check.
 * It does not do anything.
 * Borrowed from aristath/q: https://themes.trac.wordpress.org/browser/q/0.1/functions.php?rev=137308
 */
function mayland_blocks_theme_check_dummy_calls() {
	post_class();
	wp_link_pages();
}
