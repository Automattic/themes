<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.com/
 *
 * @package Libretto
 */


function libretto_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'content',
		'footer'         => 'colophon',
		'footer_widgets' => array( 'libretto_has_footer_widgets' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'content',
		'post-details'    => array(
			'stylesheet' => 'libretto-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
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
add_action( 'after_setup_theme', 'libretto_jetpack_setup' );

/**
* If the social menu or the sidebar widgets are active, switch to click-to-scroll
*/
function libretto_has_footer_widgets() {
	if ( 0 !== count( libretto_get_active_sidebars() )  ) :
		return true;
	else :
		return false;
	endif;
}
add_filter( 'infinite_scroll_has_footer_widgets', 'libretto_has_footer_widgets' );

/**
 * Enable support for site logo
 */
add_theme_support( 'site-logo', array(
	'size' => 'libretto-logo',
) );

/**
 * Remove styles for contact form
 */
function libretto_remove_jetpack_stylesheets() {
	wp_deregister_style( 'grunion.css' );
}
add_action( 'wp_enqueue_scripts', 'libretto_remove_jetpack_stylesheets' );

/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function libretto_jetpack_featured_image_display() {
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
function libretto_has_post_thumbnail( $post = null ) {
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
function libretto_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}

