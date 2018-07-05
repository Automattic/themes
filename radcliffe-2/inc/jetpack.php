<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Radcliffe 2
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function radcliffe_2_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'radcliffe_2_infinite_scroll_render',
		'footer'         => 'page',
		'wrapper'        => false,
		'footer_widgets' => array( 'sidebar-1', 'sidebar-2', 'sidebar-3' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'author-bio'           => true,
		'avatar-default'       => false,
		'post-details'         => array(
			'stylesheet'       => 'radcliffe-2-style',
			'date'             => '.posted-on',
			'categories'       => '.cat-links',
			'tags'             => '.tags-links',
			'author'           => '.byline',
			'comment'          => '.comments-link',
		),
		'featured-images'      => array(
			'archive'          => true,
			'post'             => true,
			'page'             => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );
}
add_action( 'after_setup_theme', 'radcliffe_2_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function radcliffe_2_infinite_scroll_render() {

	if ( class_exists( 'WooCommerce' ) && ( radcliffe_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		radcliffe_2_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();

		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		elseif ( class_exists( 'WooCommerce' ) && ( radcliffe_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( radcliffe_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		radcliffe_2_woocommerce_product_columns_wrapper_close();
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function radcliffe_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Return early if Author Bio is not available.
 */
function radcliffe_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'template-parts/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function radcliffe_2_author_bio_avatar_size() {
	return 60; // in px
}
add_filter( 'jetpack_author_bio_avatar_size', 'radcliffe_2_author_bio_avatar_size' );

/**
* Custom function to get the URL of a post thumbnail;
* If Jetpack is not available, fall back to wp_get_attachment_image_src()
*/
function radcliffe_2_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}

/**
 * Return early if Social Menu is not available.
 */
function radcliffe_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}
