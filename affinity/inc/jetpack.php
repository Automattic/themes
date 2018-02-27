<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Affinity
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function affinity_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'affinity_infinite_scroll_render',
		'footer_widgets' => affinity_has_footer_widgets(),
		'footer'         => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'content',
		'post-details'    => array(
			'stylesheet' => 'affinity-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'          => true,
			'post'             => true,
			'page'             => true,
			'fallback'         => true,
			'fallback-default' => false,
		),
	) );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu' );

	/*
	 * Fall back to Jetpack Site Logo if no core custom logo exists
	 *
     * @todo Remove after WP 4.7 release
	 */
	if ( ! current_theme_supports( 'custom-logo' ) ) {

		add_image_size( 'affinity-logo', 800, 250 );

		add_theme_support( 'site-logo', array( 'size' => 'affinity-logo' ) );
	}
}
add_action( 'after_setup_theme', 'affinity_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function affinity_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'components/post/content', 'search' );
		else :
			get_template_part( 'components/post/content', get_post_format() );
		endif;
	}
}


/**
 * Custom function to check for the presence of footer widgets or the social links menu
 */
function affinity_has_footer_widgets() {
	if ( is_active_sidebar( 'footer-1' ) ||
		 is_active_sidebar( 'footer-2' ) ||
		 is_active_sidebar( 'footer-3' ) ||
		 has_nav_menu( 'jetpack-social-menu' ) ) {
		return true;
	} else {
		return false;
	}
}

/*
 * Return early if no social menus are available
 */
function affinity_social_menu() {
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
function affinity_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Show/Hide Featured Image on single posts view outside of the loop.
 */
function affinity_jetpack_featured_image_display() {
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
 * Custom function to get the URL of a post thumbnail;
 * If Jetpack is not available, fall back to wp_get_attachment_image_src()
 */
function affinity_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}

/**
 * Checks if Content Options: Blog display is set to 'excerpt' and returns true if it is
 */
function affinity_content_options_show_excerpt() {
	$blog_display = get_option( 'jetpack_content_blog_display' );

	if ( 'excerpt' === $blog_display ) {
		return true;
	} else {
		return false;
	}
}
