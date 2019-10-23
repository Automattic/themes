<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Varia
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/content-options/
 */
function varia_jetpack_setup() {

	add_theme_support( 'jetpack-content-options',
		array(
			'blog-display'        => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
			'post-details'        => array(
				'stylesheet'      => 'varia-style', // name of the theme's stylesheet.
				'date'            => '.posted-on', // a CSS selector matching the elements that display the post date.
				'categories'      => '.cat-links', // a CSS selector matching the elements that display the post categories.
				'tags'            => '.tags-links', // a CSS selector matching the elements that display the post tags.
				'author'          => '.byline', // a CSS selector matching the elements that display the post author.
				'comment'         => '.comments-link', // a CSS selector matching the elements that display the comment link.
			),
			'featured-images'     => array(
				'archive'         => true, // enable or not the featured image check for archive pages: true or false.
				'archive-default' => true, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
				'post'            => true, // enable or not the featured image check for single posts: true or false.
				'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
				'page'            => true, // enable or not the featured image check for single pages: true or false.
				'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
			),
		)
	);
}
add_action( 'after_setup_theme', 'varia_jetpack_setup' );

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function varia_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Display a Featured Image on archive pages if option is ticked.
 */
function varia_jetpack_featured_image_archive_display() {
    if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
        return false;
    } else {
        $options         = get_theme_support( 'jetpack-content-options' );
        $featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

        $settings = array(
            'archive-default' => ( isset( $featured_images['archive-default'] ) && false === $featured_images['archive-default'] ) ? '' : 1,
        );

        $settings = array_merge( $settings, array(
            'archive-option'  => get_option( 'jetpack_content_featured_images_archive', $settings['archive-default'] ),
        ) );

        if ( $settings['archive-option'] ) {
            return true;
        } else {
            return false;
        }
    }
}