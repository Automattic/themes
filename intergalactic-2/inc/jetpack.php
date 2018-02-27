<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Intergalactic 2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function intergalactic_2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'footer'         => 'page',
		'render'         => 'intergalatic_infinite_scroll_render',
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
	) );

	//Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => false,
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'intergalactic-2-style',
			'date'       => '.posted-on',
			'categories' => '.entry-categories',
			'tags'       => '.entry-tags',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'          => true, // enable or not the featured image check for archive pages: true or false
        	'post'             => true, // enable or not the featured image check for single posts: true or false
        	'page'             => true, // enable or not the featured image check for single pages: true or false
			'fallback'         => true,
		),
	) );

	add_theme_support( 'jetpack-social-menu', 'svg' );

	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'intergalactic_2_jetpack_setup' );


if ( ! function_exists( 'intergalatic_infinite_scroll_render' ) ) {

	function intergalatic_infinite_scroll_render() {
		while( have_posts() ) {
		    the_post();
		    get_template_part( 'content', 'home' );
		}
	}

}

/**
 * Return early if Social Menu is not available.
 */
function intergalactic_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function intergalactic_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function intergalactic_2_author_bio_avatar_size() {
	return 140;
}
add_filter( 'jetpack_author_bio_avatar_size', 'intergalactic_2_author_bio_avatar_size' );

/**
 * Show/Hide Featured Image outside of the loop.
 */
function intergalactic_2_jetpack_featured_image_display() {
	if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
		return true;
	} else {
		$options         = get_theme_support( 'jetpack-content-options' );
		$featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

		$settings = array(
			'post-default'      => ( isset( $featured_images['post-default'] ) && false === $featured_images['post-default'] ) ? '' : 1,
			'page-default'      => ( isset( $featured_images['page-default'] ) && false === $featured_images['page-default'] ) ? '' : 1,
		);

		$settings = array_merge( $settings, array(
			'post-option'      => get_option( 'jetpack_content_featured_images_post', $settings['post-default'] ),
			'page-option'      => get_option( 'jetpack_content_featured_images_page', $settings['page-default'] ),
		) );

		if (
			( ! $settings['post-option'] && is_single() )
			|| ( ! $settings['page-option'] && is_singular() && is_page() )
		) {
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
function intergalactic_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Custom function to get the URL of a post thumbnail;
 * If Jetpack is not available, fall back to wp_get_attachment_image_src()
 */
function intergalactic_2_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
  if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
    return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
  } else {
    $attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
	$url = $attachment[0]; // Attachment URL
	return $url;
  }
}
