<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Dyad
 */

if ( ! function_exists( 'dyad_2_jetpack' ) ) {
	function dyad_2_jetpack() {
		//Responsive videos
		add_theme_support( 'jetpack-responsive-videos' );

		//Social Menu
		add_theme_support( 'jetpack-social-menu', 'svg' );

		//Featured content
		add_theme_support( 'featured-content' , array(
			'featured_content_filter' => 'dyad_2_get_banner_posts',
			'max_posts' => 6,
			'post_types' => array( 'post' ),
		) );

		//Infinite scroll
		add_theme_support( 'infinite-scroll', array(
			'container' => 'posts',
			'footer' => 'primary',
			'footer_widgets' => array( 'sidebar-1'),
			'render' => 'dyad_2_infinite_scroll_render',
			'wrapper' => false,
			'posts_per_page' => 12,
		) );

		//Content options
		add_theme_support( 'jetpack-content-options', array(
			'author-bio'         => true,
			'author-bio-default' => false,
			'post-details'       => array(
				'stylesheet'     => 'dyad-2-style',
				'date'           => '.posted-on',
				'categories'     => '.cat-links',
				'tags'           => '.tags-links',
				'author'         => '.byline, .date-published-word',
			),
			'featured-images'    => array(
				'archive'        => true,
				'post'           => true,
				'page'           => true,
				'fallback'       => true,
			),
		) );
	}
} // /dyad_2_jetpack
add_action( 'after_setup_theme', 'dyad_2_jetpack' );


/**
 * Custom render function for Infinite Scroll.
 */
function dyad_2_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		dyad_2_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}
	while ( have_posts() ) {
		the_post();
		if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'template-parts/content', 'blocks' );
		endif;
	}
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		dyad_2_woocommerce_product_columns_wrapper_close();
	}
} // end function dyad_2_infinite_scroll_render

/**
* Getter function for Featured Content.
* See http://jetpack.me/support/featured-content/
*/
function dyad_2_get_banner_posts() {
	return apply_filters( 'dyad_2_get_banner_posts', array() );
}

/**
 * Check for minimum number of featured posts
 */
function dyad_2_has_banner_posts( $minimum = 1 ) {

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'dyad_2_get_banner_posts', array() );

	if ( ! is_array( $featured_posts ) ) {
		return false;
	}

	if ( $minimum > count( $featured_posts ) ) {
		return false;
	}

	return true;
}


/**
 * Return early if Social Menu is not available.
 */
function dyad_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function dyad_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function dyad_2_jetpack_featured_image_display() {
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
function dyad_2_has_post_thumbnail( $post = null ) {
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
function dyad_2_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}
