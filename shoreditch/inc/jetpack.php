<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Shoreditch
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/featured-content/
 * See: https://jetpack.me/support/responsive-videos/
 * See: https://jetpack.me/support/social-menu/
 * See: https://jetpack.me/support/custom-content-types/#testimonials
 */
function shoreditch_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'shoreditch_infinite_scroll_render',
		'footer'         => 'page',
		'footer_widgets' => array(
			'sidebar-2',
			'sidebar-3',
		),
	) );

	//Add theme support for Featured Content.
	add_theme_support( 'featured-content', array(
		'filter'      => 'shoreditch_get_featured_posts',
		'description' => esc_html__( 'The featured content section displays on the index page bellow the header.', 'shoreditch' ),
		'max_posts'   => 6,
		'post_types'  => array( 'post', 'page' ),
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menu.
	add_theme_support( 'jetpack-social-menu' );

	// Add theme support for Testimonials.
	add_theme_support( 'jetpack-testimonial' );

	//Add theme support for Content Options.
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'shoreditch-style',
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
add_action( 'after_setup_theme', 'shoreditch_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function shoreditch_infinite_scroll_render() {
	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		shoreditch_woocommerce_product_columns_wrapper();
		woocommerce_product_loop_start();
	}

	while ( have_posts() ) {
		the_post();
		if ( is_search() ) {
			get_template_part( 'template-parts/content', 'search' );
		} else if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
			wc_get_template_part( 'content', 'product' );
		} else if ( is_post_type_archive( 'jetpack-testimonial' ) ) {
			get_template_part( 'template-parts/content', 'testimonial' );
		} else {
			get_template_part( 'template-parts/content', get_post_format() );
		}
	}

	if ( class_exists( 'WooCommerce' ) && ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		woocommerce_product_loop_end();
		shoreditch_woocommerce_product_columns_wrapper_close();
	}
}

/**
 * Featured Posts.
 */
function shoreditch_has_multiple_featured_posts() {
	$featured_posts = apply_filters( 'shoreditch_get_featured_posts', array() );
	if ( is_array( $featured_posts ) && 1 < count( $featured_posts ) ) {
		return true;
	}
	return false;
}
function shoreditch_get_featured_posts() {
	return apply_filters( 'shoreditch_get_featured_posts', false );
}

/**
 * Return early if Social Menu is not available.
 */
function shoreditch_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Testimonials Title.
 */
function shoreditch_testimonials_title( $before = '', $after = '' ) {
	$jetpack_options = get_theme_mod( 'jetpack_testimonials' );
	$title = esc_html__( 'Testimonials', 'shoreditch' );
	if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] ) {
		$title = esc_html( $jetpack_options['page-title'] );
	}
	echo $before . $title . $after;
}

/**
 * Testimonials Content.
 */
function shoreditch_testimonials_content( $before = '', $after = '' ) {
	$jetpack_options = get_theme_mod( 'jetpack_testimonials' );
	if ( isset( $jetpack_options['page-content'] ) && '' != $jetpack_options['page-content'] ) {
		$content = convert_chars( convert_smilies( wptexturize( stripslashes( wp_filter_post_kses( addslashes( $jetpack_options['page-content'] ) ) ) ) ) );
		echo $before . $content . $after;
	}
}

/**
 * Testimonials Featured Image.
 */
function shoreditch_testimonials_image() {
	$jetpack_options = get_theme_mod( 'jetpack_testimonials' );
	if ( isset( $jetpack_options['featured-image'] ) && '' != $jetpack_options['featured-image'] ) {
		$image = wp_get_attachment_image_src( (int)$jetpack_options['featured-image'], 'post-thumbnail' );
		printf( ' style="background-image: url(\'%s\');"', esc_url( $image[0] ) );
	}
}

/**
 * Return early if Author Bio is not available.
 */
function shoreditch_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		get_template_part( 'template-parts/content', 'author' );
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Bio Avatar Size.
 */
function shoreditch_author_bio_avatar_size() {
	return 60;
}
add_filter( 'jetpack_author_bio_avatar_size', 'shoreditch_author_bio_avatar_size' );

/**
 * Load Jetpack scripts.
 */
function shoreditch_jetpack_scripts() {
	if ( is_home() && ! is_paged() && false !== shoreditch_get_featured_posts() ) {
		wp_register_script( 'jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '2.6.0', true );

		wp_enqueue_script( 'shoreditch-featured-content', get_template_directory_uri() . '/js/featured-content.js', array( 'jquery-flexslider' ), '20160411', true );
	}
}
add_action( 'wp_enqueue_scripts', 'shoreditch_jetpack_scripts' );

/**
 * Hide Featured Image on single posts view outside of the loop.
 */
function shoreditch_jetpack_featured_image_post() {
	if ( ! function_exists( 'jetpack_featured_images_remove_post_thumbnail' ) ) {
		return true;
	} else {
		$options         = get_theme_support( 'jetpack-content-options' );
	    $featured_images = ( ! empty( $options[0]['featured-images'] ) ) ? $options[0]['featured-images'] : null;

	    $settings = array(
			'post-default' => ( isset( $featured_images['post-default'] ) && false === $featured_images['post-default'] ) ? '' : 1,
		);

		$settings = array_merge( $settings, array(
	        'post-option'     => get_option( 'jetpack_content_featured_images_post', $settings['post-default'] ),
		) );

		if ( ! $settings['post-option'] ) {
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
function shoreditch_has_post_thumbnail( $post = null ) {
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
function shoreditch_get_attachment_image_src( $post_id, $post_thumbnail_id, $size ) {
	if ( function_exists( 'jetpack_featured_images_fallback_get_image_src' ) ) {
		return jetpack_featured_images_fallback_get_image_src( $post_id, $post_thumbnail_id, $size );
	} else {
		$attachment = wp_get_attachment_image_src( $post_thumbnail_id, $size ); // Attachment array
		$url = $attachment[0]; // Attachment URL
		return $url;
	}
}
