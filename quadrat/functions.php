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
			return locate_template( array( 'index.php' ) );
		case is_404() :
			return locate_template( array( '404.php' ) );
		case is_search() :
			return locate_template( array( 'search.php' ) );
		case is_singular() :
			return locate_template( array( 'singular.php' ) );
		default:
			return $template;
	}

}

add_filter( 'template_include', 'quadrat_override_index_template' );