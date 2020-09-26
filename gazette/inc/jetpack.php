<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Gazette
 */

function gazette_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'main',
		'footer_widgets' => array( 'sidebar-2' ),
		'wrapper'        => false,
	) );

	// Add theme support for Featured Content.
	add_theme_support( 'featured-content', array(
		'filter'      => 'gazette_get_featured_posts',
		'description' => __( 'The featured content section displays on the front page above the header.', 'gazette' ),
		'post_types' => array( 'post', 'page' ),
		'max_posts'   => 6,
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Site Logo.
	add_image_size( 'gazette-logo', 270, 60 );
	add_theme_support( 'site-logo', array( 'size' => 'gazette-logo' ) );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'gazette-style',
			'date'       => '.posted-on, .group-blog:not(.single) .byline:before',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
			'fallback'   => true,
		),
	) );
}
add_action( 'after_setup_theme', 'gazette_jetpack_setup' );

/**
 * Featured Posts
 */
function gazette_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'gazette_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function gazette_get_featured_posts() {
	return apply_filters( 'gazette_get_featured_posts', false );
}

/**
 * Remove sharedaddy from excerpt.
 */
function gazette_remove_sharedaddy() {
    remove_filter( 'the_excerpt', 'sharing_display', 19 );
}
add_action( 'loop_start', 'gazette_remove_sharedaddy' );

/**
 * Return early if Site Logo is not available.
 */
function gazette_the_site_logo() {
	if ( function_exists( 'jetpack_the_site_logo' ) && has_site_logo() ) {
		jetpack_the_site_logo();
	} else {
		return;
	}
}

/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function gazette_jetpack_featured_image_display() {
	if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
		return true;
	} else {
		$options         = get_theme_support( 'jetpack-content-options' );
		$featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

		$settings = array(
			'post-default' => ( isset( $featured_images['post-default'] ) && false === $featured_images['post-default'] ) ? '' : 1,
			'page-default' => ( isset( $featured_images['page-default'] ) && false === $featured_images['page-default'] ) ? '' : 1,
		);

		$settings = array_merge( $settings, array(
			'post-option'  => get_option( 'jetpack_content_featured_images_post', $settings['post-default'] ),
			'page-option'  => get_option( 'jetpack_content_featured_images_page', $settings['page-default'] ),
		) );

		if ( ( ! $settings['post-option'] && is_single() )
			|| ( ! $settings['page-option'] && is_singular() && is_page() ) ) {
			return false;
		} else {
			return true;
		}
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function gazette_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
