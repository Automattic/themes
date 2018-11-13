<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package photos
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function photos_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
		'footer_widgets' => array(
			'sidebar-1',
			'sidebar-2',
			'sidebar-3' ),
		'posts_per_page' => 12,
		'render'    => 'photos_infinite_scroll_render',
		'type'		=> 'scroll',
		'wrapper'	=> false,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'photos-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'		 => true,
			'post'			 => true,
			'post-default'	 => false,
			'page'			 => true,
			'page-default'	 => false,
			'fallback'		 => true,
		),
	) );

	// Social Menu
	add_theme_support( 'jetpack-social-menu', 'svg' );
}
add_action( 'after_setup_theme', 'photos_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function photos_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'grid' );
	}
}

/**
 * Social menu
 */
function photos_social_menu() {
	if ( function_exists( 'jetpack_social_menu' ) ) {
		jetpack_social_menu();
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function photos_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 *
 */
function photos_relatedposts_filter_thumbnail_size() {
	$size = array(
		'width' => 320,
		'height' => 320
	);

	return $size;
}
add_filter( 'jetpack_relatedposts_filter_thumbnail_size', 'photos_relatedposts_filter_thumbnail_size' );

/**
 * Removing related posts from default spot below the post content
 */
function photos_remove_related_posts() {
	if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
		$jprp = Jetpack_RelatedPosts::init();
		$callback = array( $jprp, 'filter_add_target_to_dom' );
		remove_filter( 'the_content', $callback, 40 );
	}
}
// add_filter( 'wp', 'photos_remove_related_posts', 20 );

/**
 * This function is used to add related posts where we want them
 */
function photos_related_posts() {
	if ( class_exists( 'Jetpack_RelatedPosts' ) ) {
	    echo do_shortcode( '[jetpack-related-posts]' );
	}
}
