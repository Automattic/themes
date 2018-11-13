<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Libre 2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function libre_2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'libre_2_infinite_scroll_render',
		'footer'         => 'masthead',
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
		'wrapper'        => false,
	) );

	add_theme_support( 'jetpack-responsive-videos' );

	add_theme_support( 'jetpack-social-menu', 'svg' );

	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'libre-2-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'          => true, // enable or not the featured image check for archive pages: true or false
			'post'             => true, // enable or not the featured image check for single posts: true or false
			'page'             => true, // enable or not the featured image check for single pages: true or false
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );
} // end function libre_2_jetpack_setup
add_action( 'after_setup_theme', 'libre_2_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function libre_2_infinite_scroll_render() {

	if ( class_exists( 'WooCommerce' ) && ( libre_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		libre_2_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		elseif ( class_exists( 'WooCommerce' ) && ( libre_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( libre_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		libre_2_woocommerce_product_columns_wrapper_close();
	}
} // end function libre_2_infinite_scroll_render

/**
 * Return early if Social Menu is not available.
 */
function libre_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function libre_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'template-parts/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function libre_2_author_bio_avatar_size() {
	return 100;
}
add_filter( 'jetpack_author_bio_avatar_size', 'libre_2_author_bio_avatar_size' );

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function libre_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
