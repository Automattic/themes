<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Apostrophe 2
 */

function apostrophe_2_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'colophon',
		'footer_widgets' => 'footer-sidebar',
		'wrapper'        => false,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Featured Content.
	add_theme_support( 'featured-content', array(
		'filter'    => 'apostrophe_2_get_featured_posts',
		'max_posts' => 6,
	) );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet' => 'apostrophe-2-style',
			'date'       => '.entry-header .entry-meta, .posted-on',
			'categories' => '.post-categories',
			'tags'       => '.post-tags',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'      => true,
			'post'         => true,
			'post-default' => false,
			'page'         => true,
			'page-default' => false,
			'fallback'     => true,
		),
	) );

	add_theme_support( 'jetpack-social-menu', 'svg' );
}
add_action( 'after_setup_theme', 'apostrophe_2_jetpack_setup' );

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function apostrophe_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Return early if Social Menu is not available.
 */
function apostrophe_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Author Bio Avatar Size.
 */
function apostrophe_2_author_bio_avatar_size() {
    return 125; // in px
}
add_filter( 'jetpack_author_bio_avatar_size', 'apostrophe_2_author_bio_avatar_size' );

/**
 * Change the wrapper id on the blog index page.
 */
function apostrophe_2_infinite_scroll_js_settings( $settings ) {

	if ( is_home() || is_archive() || is_search() ) {
		$settings['id'] = 'posts-wrapper';
	}

	return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'apostrophe_2_infinite_scroll_js_settings' );
