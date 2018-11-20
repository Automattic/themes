<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Dara
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function dara_jetpack_setup() {

	//The IS container changes depending on the archive type
	if ( is_post_type_archive( 'jetpack-testimonial' ) ) {
		$container = 'testimonials';
	}
	else {
		$container = 'main';
	}
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => $container,
		'render'    => 'dara_infinite_scroll_render',
		'footer'    => 'page',
	) );

	add_theme_support( 'featured-content', array(
		'filter'     => 'dara_get_featured_posts',
		'max_posts'  => 10,
		'post_types' => array( 'post', 'page', 'jetpack-portfolio' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Add theme support for Jetpack Testimonials
	add_theme_support( 'jetpack-testimonial' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'dara-style',
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

}
add_action( 'after_setup_theme', 'dara_jetpack_setup' );

/**
 * Footer widgets Callback for Infinite Scroll
 */
if ( function_exists( 'jetpack_is_mobile' ) && class_exists( 'Jetpack_User_Agent_Info' ) ) {
	function dara_has_footer_widgets() {

		if ( ( Jetpack_User_Agent_Info::is_ipad() && is_active_sidebar( 'sidebar-1' ) ) || ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) {
			return true;
		}
		elseif ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) {
			return true;
		}

		return false;
	}
	add_filter( 'infinite_scroll_has_footer_widgets', 'dara_has_footer_widgets' );
}

/**
 * Custom render function for Infinite Scroll.
 */
function dara_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( dara_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		dara_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/post/content', 'search' );
		elseif ( is_post_type_archive( 'jetpack-testimonial' ) ) :
			get_template_part( 'components/testimonials/content', 'testimonial' );
		elseif ( class_exists( 'WooCommerce' ) && ( dara_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'components/post/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( dara_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		dara_woocommerce_product_columns_wrapper_close();
	}
}

function dara_get_featured_posts() {
	return apply_filters( 'dara_get_featured_posts', array() );
}

function dara_has_featured_posts( $minimum = 1 ) {
	if ( is_paged() )
		return false;

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'dara_get_featured_posts', array() );

	if ( ! is_array( $featured_posts ) )
		return false;

	if ( $minimum > count( $featured_posts ) )
		return false;

	return true;
}

/**
 * Return early if Author Bio is not available.
 */
function dara_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'components/post/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function dara_author_bio_avatar_size() {
	return 90;
}
add_filter( 'jetpack_author_bio_avatar_size', 'dara_author_bio_avatar_size' );

function dara_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function dara_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}