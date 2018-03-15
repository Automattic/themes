<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Karuna
 */

/**
 * Jetpack setup function.
 */
function karuna_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'karuna_infinite_scroll_render',
		'footer'         => 'page',
		'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-5', 'sidebar-6', 'sidebar-7' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Add theme support for Testimonials
	add_theme_support( 'jetpack-testimonial' );

	//Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'       => 'content',
		'author-bio'         => true,
		'author-bio-default' => false,
		'post-details'       => array(
			'stylesheet' => 'karuna-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images'    => array(
			'archive'          => true,
			'post'             => true,
			'page'             => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );
}
add_action( 'after_setup_theme', 'karuna_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function karuna_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		karuna_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		elseif ( is_search() ) :
		    get_template_part( 'components/post/content', 'search' );
		else :
		    get_template_part( 'components/post/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		karuna_woocommerce_product_columns_wrapper_close();
	}
}

/*
 * Only display social menu if function exists
 */
function karuna_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function karuna_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		return;
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function karuna_author_bio_avatar_size() {
	return 60;
}
add_filter( 'jetpack_author_bio_avatar_size', 'karuna_author_bio_avatar_size' );

/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function karuna_jetpack_featured_image_display() {
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
function karuna_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
