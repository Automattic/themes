<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Publication
 */

function publication_jetpack_setup() {
	/**
	 * Add theme support for Infinite Scroll.
	 * See: https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'publication_infinite_scroll_render',
		'footer'    => 'page',
	) );

	/**
	 * Add theme support for Responsive Videos.
	 */
	add_theme_support( 'jetpack-responsive-videos' );

	/**
	 * Add theme support for Logo upload.
	 */
	add_image_size( 'publication-logo', 324, 108 );
	add_theme_support( 'site-logo', array( 'size' => 'publication-logo' ) );
}
add_action( 'after_setup_theme', 'publication_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function publication_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
}

/**
 * Make sure publication_post_classes() isn't loaded on Infinite Scroll.
 */
function publication_remove_post_classes() {
    remove_filter( 'post_class', 'publication_post_classes' );
}
add_action( 'infinite_scroll_render', 'publication_remove_post_classes' );

/**
 * Remove sharedaddy from excerpt.
 */
function publication_remove_sharedaddy() {
    remove_filter( 'the_excerpt', 'sharing_display', 19 );
}
add_action( 'loop_start', 'publication_remove_sharedaddy' );

/**
 * Return early if Site Logo is not available.
 */
function publication_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
 * Overwritte default gallery widget content width.
 */
function publication_gallery_widget_content_width( $width ) {
	return 672;
}
add_filter( 'gallery_widget_content_width', 'publication_gallery_widget_content_width');
