<?php


if ( ! function_exists( 'skatepark_support' ) ) :
	function skatepark_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'skatepark' ),
			)
		);

		remove_theme_support( 'block-templates' );
	}
	add_action( 'after_setup_theme', 'skatepark_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function skatepark_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'skatepark-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'skatepark_scripts' );
