<?php


if ( ! function_exists( 'skatepark_support' ) ) :
	function skatepark_support() {
		// Enqueue editor styles.
		add_editor_style(
			array(
				'/assets/theme.css',
			)
		);

		//Primary navigation is used on the header and the footer pattern
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'skatepark' ),
				'social' => __( 'Social Navigation', 'skatepark' )
			)
		);
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

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';

/**
 * Add class to body if post/page has a featured image.
 */
function add_featured_image_class( $classes ) {
	global $post;
	if ( isset ( $post->ID ) && get_the_post_thumbnail( $post->ID ) ) {
		$classes[] = 'has-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'add_featured_image_class' );
