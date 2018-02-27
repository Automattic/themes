<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.com/
 *
 * @package Penscratch 2
 */

/**
 * Jetpack Setup.
 */
function penscratch_2_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'page',
	) );

    // Add theme support for Responsive Videos.
    add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menu.
	add_theme_support( 'jetpack-social-menu', 'svg' );

    // Add theme support for Content Options.
    add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'content',
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet'  => 'penscratch-2-style',
			'date'        => '.posted-on, .byline .sep, body:not(.group-blog):not(.single) .byline + .sep',
			'categories'  => '.cat-links',
			'tags'        => '.tags-links',
			'author'      => '.byline .author, .group-blog .byline + .sep, .single .byline + .sep'
		),
		'featured-images' => array(
			'archive'          => true,
			'post'             => true,
			'page'             => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );
}
add_action( 'after_setup_theme', 'penscratch_2_jetpack_setup' );

// Turn off infinite scroll if mobile + sidebar, or if social menu is active
if ( function_exists( 'jetpack_is_mobile' ) && ! function_exists( 'penscratch_2_has_footer_widgets' ) ) {

    function penscratch_2_has_footer_widgets() {
        if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || has_nav_menu( 'jetpack-social-navigation' ) ||  ( ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) )
            return true;

        return false;
    }

} //endif
add_filter( 'infinite_scroll_has_footer_widgets', 'penscratch_2_has_footer_widgets' );

/**
 * Return early if Social Menu is not available.
 */
function penscratch_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function penscratch_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function penscratch_2_author_bio_avatar_size() {
	return 60;
}
add_filter( 'jetpack_author_bio_avatar_size', 'penscratch_2_author_bio_avatar_size' );

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function penscratch_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
