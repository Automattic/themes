<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Ixion
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function ixion_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'	     => 'main',
		'render'         => 'ixion_infinite_scroll_render',
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4', 'sidebar-5' ),
		'footer'         => 'page',
	) );

	//Add theme support for Featured Content
	add_theme_support( 'featured-content', array(
		'filter'     => 'ixion_get_featured_posts',
		'max_posts'  => 3,
		'post_types' => array( 'post', 'page' )
	));

	//Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'ixion-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'         => true, // enable or not the featured image check for archive pages: true or false
        	'archive-default' => false, // the default setting of the featured image on archive pages, if it's enabled or not: true or false
        	'post'            => true, // enable or not the featured image check for single posts: true or false
        	'page'            => true, // enable or not the featured image check for single pages: true or false
		),
	) );

	// Add theme support for Testimonials.
	add_theme_support( 'jetpack-testimonial' );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

}
add_action( 'after_setup_theme', 'ixion_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function ixion_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/post/content', 'search' );
		else :
			get_template_part( 'components/post/content', get_post_format() );
endif;
	}
}

/**
 * Return early if Social Menu is not available.
 */
function ixion_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function ixion_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'components/post/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function ixion_author_bio_avatar_size() {
	return 60;
}
add_filter( 'jetpack_author_bio_avatar_size', 'ixion_author_bio_avatar_size' );

/**
 * Featured Posts
 */
function ixion_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'ixion_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function ixion_get_featured_posts() {
	return apply_filters( 'ixion_get_featured_posts', false );
}
