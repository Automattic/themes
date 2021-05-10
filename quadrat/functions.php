<?php

if ( ! function_exists( 'quadrat_support' ) ) :
	function quadrat_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);

		add_theme_support( 'block-nav-menus' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'quadrat' ),
				'social'  => __( 'Social Links Navigation', 'quadrat' ),
			)
		);

		remove_theme_support( 'block-templates' );
	}
	add_action( 'after_setup_theme', 'quadrat_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function quadrat_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'quadrat-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blank_canvas_blocks-ponyfill' ), wp_get_theme()->get( 'Version' ) );
	// Enqueue customizer bridge styles
	wp_enqueue_style( 'customizer-style', get_template_directory_uri() . '/assets/css/noop.css', array( 'quadrat-styles' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'quadrat_scripts' );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';

/**
 * Customizer Bridge
 */
require get_stylesheet_directory() . '/inc/customization.php';
