<?php

if ( ! function_exists( 'quadrat_support' ) ) :
	function quadrat_support() {

		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);
	}
	add_action( 'after_setup_theme', 'quadrat_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function quadrat_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'quadrat-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blank_canvas_blocks-ponyfill' ), wp_get_theme()->get( 'Version' ) );
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
 * Override the Parent Theme index.html template and load the index.php template from the child instead
 * This may not be needed once https://github.com/WordPress/gutenberg/issues/25612#issuecomment-819419024 is addressed
 */
function quadrat_override_index_template( $template ) {

	switch ($template) {
		case is_home() || is_front_page() :
			$template = locate_template( array( 'index.php' ) );
			break;
		case is_404() :
			$template = locate_template( array( '404.php' ) );
			break;
		case is_search() :
			$template = locate_template( array( 'search.php' ) );
			break;
		case is_singular() :
			$template = locate_template( array( 'singular.php' ) );
			break;
		default:
			$template = locate_template( array( 'index.php' ) );
			break;
	}

	return $template;
}

add_filter( 'template_include', 'quadrat_override_index_template' );