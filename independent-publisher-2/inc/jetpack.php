<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Independent_Publisher_2
 */

/**
 * Add theme support for Jetpack features.
 */
function independent_publisher_2_jetpack_setup() {
	/*
	 * Add theme support for Infinite Scroll.
	 * See: https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'independent_publisher_2_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Social Menu.
	add_theme_support( 'jetpack-social-menu', 'svg' );

	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'content',
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet' => 'independent-publisher-2-style',
			'date'       => '.published-on, .post-permalink, .site-posted-on',
			'categories' => '.cat-links',
			'tags'       => '.post-tags, .tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'          => true,
			'post'             => true,
			'post-default'     => true,
			'page'             => true,
			'page-default'     => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );

	/*
	 * Add support for Responsive Videos
	 * See: https://jetpack.me/support/responsive-videos/
	 */
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'independent_publisher_2_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function independent_publisher_2_infinite_scroll_render() {

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		ip_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content', 'search' );
		elseif ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		ip_woocommerce_product_columns_wrapper_close();
	}

}

/**
 * Return early if Social Menu is not available.
 */
function independent_publisher_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

// Turn off infinite scroll if mobile + sidebar, or if social menu is active
if ( function_exists( 'jetpack_is_mobile' ) && ! function_exists( 'independent_publisher_2_has_footer_widgets' ) ) {

    function independent_publisher_2_has_footer_widgets() {
        if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ||  ( ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) )
            return true;

        return false;
    }

} //endif
add_filter( 'infinite_scroll_has_footer_widgets', 'independent_publisher_2_has_footer_widgets' );

/**
 * Return early if Author Bio is not available.
 */
function independent_publisher_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'template-parts/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function independent_publisher_2_author_bio_avatar_size() {
	return 80;
}
add_filter( 'jetpack_author_bio_avatar_size', 'independent_publisher_2_author_bio_avatar_size' );

/**
 * Fall back to has_post_thumbnail() if jetpack_has_featured_image is not available
 */
function independent_publisher_2_has_post_thumbnail( $post = null ) {
    if ( ! function_exists( 'jetpack_has_featured_image' ) ) {
        return has_post_thumbnail( $post );
    } else {
        return jetpack_has_featured_image( $post );
    }
}

/**
 * Show/Hide Featured Image outside of the loop.
 */
function independent_publisher_2_jetpack_featured_image_display() {

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
