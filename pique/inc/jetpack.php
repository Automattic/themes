<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.com/
 *
 * @package Pique
 */

function pique_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'wrapper'        => false,
		'render'         => 'pique_infinite_scroll_render',
		'footer'         => 'tertiary',
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
		'posts_per_page' => 9
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Site Logo.
	add_image_size( 'pique-logo', 2000, 200 );
	add_theme_support( 'site-logo', array( 'size' => 'pique-logo' ) );

	// Add theme support for Testimonial CPT.
	add_theme_support( 'jetpack-testimonial' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => array(
			'content',
			'excerpt',
		),
		'post-details'    => array(
			'stylesheet' => 'pique-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'          => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );
} // end function pique_jetpack_setup
add_action( 'after_setup_theme', 'pique_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function pique_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		pique_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		elseif ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'components/content', get_post_format() );
		endif;
	}
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		pique_woocommerce_product_columns_wrapper_close();
	}
} // end function pique_infinite_scroll_render

/**
 * Return early if Site Logo is not available.
 *
 * @since Pique 1.0
 */
function pique_the_site_logo() {
	if ( ! function_exists( 'jetpack_the_site_logo' ) ) {
		return;
	} else {
		jetpack_the_site_logo();
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function pique_has_post_thumbnail( $post = null ) {
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
function pique_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}

