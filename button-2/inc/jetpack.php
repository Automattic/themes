<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Button 2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 *
 * @since button 1.0
 */
function button_2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'button_2_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Social Menu.
	add_theme_support( 'jetpack-social-menu', 'svg' );

	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'content',
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet' => 'button-2-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
		'featured-images' => array(
			'archive'          => true,
			'post'             => true,
			'post-default'     => false,
			'page'             => true,
			'page-default'     => false,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );

	add_theme_support( 'jetpack-responsive-videos' );

} // end function button_2_jetpack_setup
add_action( 'after_setup_theme', 'button_2_jetpack_setup' );

// Turn off infinite scroll if mobile + sidebar, or if social menu is active
if ( function_exists( 'jetpack_is_mobile' ) && ! function_exists( 'button_2_has_footer_widgets' ) ) {

    function button_2_has_footer_widgets() {
        if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ||  ( ( jetpack_is_mobile( '', true ) && is_active_sidebar( 'sidebar-1' ) ) ) )
            return true;

        return false;
    }

} //endif
add_filter( 'infinite_scroll_has_footer_widgets', 'button_2_has_footer_widgets' );

/**
 * Custom render function for Infinite Scroll.
 *
 * @since button 1.0
 */
function button_2_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( button_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		button_2_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();

		if ( is_search() ) :
			get_template_part( 'components/content', 'search' );
		elseif ( class_exists( 'WooCommerce' ) && ( button_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) :
			wc_get_template_part( 'content', 'product' );
		else :
			get_template_part( 'components/content', get_post_format() );
		endif;
	}

	if ( class_exists( 'WooCommerce' ) && ( button_2_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		button_2_woocommerce_product_columns_wrapper_close();
	}
} // end function button_2_infinite_scroll_render

/**
 * Return early if Social Menu is not available.
 */
function button_2_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Return early if Author Bio is not available.
 */
function button_2_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'components/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function button_2_author_bio_avatar_size() {
	return 80;
}
add_filter( 'jetpack_author_bio_avatar_size', 'button_2_author_bio_avatar_size' );

/**
 * Load Jetpack sharing buttons and likes.
 *
 * @since button 1.0
 */
function button_2_post_flair() {
	// Sharing buttons
	if ( function_exists( 'sharing_display' ) ) {
		sharing_display( '', true );
	}

	// Likes
	if ( class_exists( 'Jetpack_Likes' ) ) {
		$custom_likes = new Jetpack_Likes;
		echo $custom_likes->post_likes( '' );
	}
}

/**
 * Custom function to check for a post thumbnail;
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function button_2_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}
