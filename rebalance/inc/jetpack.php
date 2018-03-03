<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Rebalance
 */

/**
 * Jetpack Setup
 */
function rebalance_jetpack_setup() {

	// Add support for Jetpack Portfolio Custom Post Type.
	add_theme_support( 'jetpack-portfolio', array(
		'title'          => true,
		'content'        => true,
		'featured-image' => true,
	) );

	// Custom logo fallback
	// - Use Jetpack logo if theme does not support custom logo
	if ( ! current_theme_supports( 'custom-logo' ) ) {
		// Add support for Jetpack site logo
		add_image_size( 'rebalance_site_logo', 0, 80 );
		$args = array(
			'header-text' => array(
				'site-title',
				'site-description',
			),
			'size' => 'rebalance_site_logo',
		);
		add_theme_support( 'site-logo', $args );
	}

	// Featured content
	add_theme_support( 'featured-content', array(
		'filter'     => 'rebalance_get_featured_projects',
		'max_posts'  => 1,
		'post_types' => 'jetpack-portfolio',
	) );

	// Add theme support for Infinite Scroll.
	// See: https://jetpack.com/support/infinite-scroll/
	add_theme_support( 'infinite-scroll', array(
		'footer_widgets' => array( 'sidebar-1' ),
		'wrapper'        => false,
		'container'      => 'infinite-wrap',
		'render'         => 'rebalance_infinite_scroll_render',
		'footer'         => 'page',
	) );

	// Add theme support for Responsive Videos.
	// See: https://jetpack.com/support/responsive-videos/
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	// See: https://jetpack.com/support/content-options/
	add_theme_support( 'jetpack-content-options', array(
		'blog-display'    => 'excerpt',
		'masonry'         => '#infinite-wrap',
		'author-bio'      => true,
		'post-details'    => array(
			'stylesheet' => 'rebalance-style',
			'date'       => '.entry-tags-date',
			'categories' => '.entry-categories',
			'tags'       => '.entry-tags',
			'author'     => '.entry-meta .author',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'portfolio'  => true,
			'fallback'   => true,
		),
	) );
} // end function rebalance_jetpack_setup
add_action( 'after_setup_theme', 'rebalance_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function rebalance_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'card' );
	}
}

/**
 * Enable Infinite Scroll for Projects (jetpack-portfolio)
 *
 * @param array $args
 * @filter infinite_scroll_query_args
 * @return array
 */
function rebalance_jetpack_infinite_scroll_query_args( $args ) {
	if ( is_page_template( 'template-projects.php' ) ) {
		$args['post_type']           = array( 'post', 'page', 'jetpack-portfolio' );
		$args['ignore_sticky_posts'] = false;
		$args['paged']               = get_query_var('paged') ? get_query_var('paged') : 1;
	}
	return $args;
}
add_filter( 'infinite_scroll_query_args', 'rebalance_jetpack_infinite_scroll_query_args' );

/**
 * Getter function for Featured Content
 *
 * @return (string) The value of the filter defined in add_theme_support( 'featured-content' )
 */
function rebalance_get_featured_projects() {
	return apply_filters( 'rebalance_get_featured_projects', array() );
}

/**
 * Helper function to check for Featured Content
 *
 * @param (integer)
 * @return (boolean) true/false
 */
function rebalance_has_featured_projects( $minimum = 1 ) {
	if ( is_paged() ) {
		return false;
	}

	$minimum = absint( $minimum );
	$featured_posts = apply_filters( 'rebalance_get_featured_projects', array() );

	if ( ! is_array( $featured_posts ) ) {
		return false;
	}

	if ( $minimum > count( $featured_posts ) ) {
		return false;
	}

	return true;
}

function rebalance_get_featured_project_ids() {
	// Get array of cached results if they exist.
	$featured_ids = get_transient( 'featured_content_ids' );

	if ( false === $featured_ids ) {
		$settings = get_theme_mods();
		$term = get_term_by( 'name', $settings['tag-name'], 'post_tag' );

		if ( $term ) {
			// Query for featured posts.
			$featured_ids = get_posts( array(
				'fields'           => 'ids',
				'numberposts'      => $max_posts,
				'post_type'        => 'jetpack-portfolio',
				'suppress_filters' => false,
				'tax_query'        => array(
					array(
					'field'    => 'term_id',
					'taxonomy' => 'post_tag',
					'terms'    => $term->term_id,
					),
				),
				)
			);
		}

		set_transient( 'featured_content_ids', $featured_ids );
	}

	// Ensure correct format before return.
	return array_map( 'absint', $featured_ids );
}

/**
 * Portfolio Title
 */
function rebalance_portfolio_title( $before = '', $after = '' ) {
	$jetpack_portfolio_title = get_option( 'jetpack_portfolio_title' );
	$title = '';

	if ( is_post_type_archive( 'jetpack-portfolio' ) ) {
		if ( isset( $jetpack_portfolio_title ) && '' != $jetpack_portfolio_title ) {
			$title = esc_html( $jetpack_portfolio_title );
		} else {
			$title = post_type_archive_title( '', false );
		}
	} elseif ( is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$title = single_term_title( '', false );
	}

	echo $before . $title . $after;
}

/**
 * Portfolio Content
 */
function rebalance_portfolio_content( $before = '', $after = '' ) {
	$jetpack_portfolio_content = get_option( 'jetpack_portfolio_content' );

	if ( is_tax() && get_the_archive_description() ) {
		echo $before . get_the_archive_description() . $after;
	} else if ( isset( $jetpack_portfolio_content ) && '' != $jetpack_portfolio_content ) {
		$content = convert_chars( convert_smilies( wptexturize( wp_kses_post( $jetpack_portfolio_content ) ) ) );
		echo $before . $content . $after;
	}
}

/**
 * Portfolio Featured Image
 */
function rebalance_portfolio_thumbnail( $before = '', $after = '' ) {
	$jetpack_portfolio_featured_image = get_option( 'jetpack_portfolio_featured_image' );

	if ( isset( $jetpack_portfolio_featured_image ) && '' != $jetpack_portfolio_featured_image ) {
		$featured_image = wp_get_attachment_image( (int) $jetpack_portfolio_featured_image, 'full-width' );
		echo $before . $featured_image . $after;
	}
}

/**
 * Filter Infinite Scroll text handle
 */
function rebalance_portfolio_infinite_scroll_navigation( $js_settings ) {
	if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$js_settings[ 'text' ] = esc_js( esc_html__( 'Older projects', 'rebalance' ) );
	}

	return $js_settings;
}
add_filter( 'infinite_scroll_js_settings', 'rebalance_portfolio_infinite_scroll_navigation' );

/**
 * Return Author Bio
 * If Jetpack is not available, fall back to rebalance_author_meta()
 */
function rebalance_author_bio() {
	if ( ! function_exists( 'jetpack_author_bio' ) ) {
		rebalance_author_meta();
	} else {
		jetpack_author_bio();
	}
}

/**
 * Author Author Bio Avatar Size
 */
function rebalance_author_bio_avatar_size() {
	return 111;
}
add_filter( 'jetpack_author_bio_avatar_size', 'rebalance_author_bio_avatar_size' );

/**
 * Custom function to check for a post thumbnail
 * If Jetpack is not available, fall back to has_post_thumbnail()
 */
function rebalance_has_post_thumbnail( $post = null ) {
	if ( function_exists( 'jetpack_has_featured_image' ) ) {
		return jetpack_has_featured_image( $post );
	} else {
		return has_post_thumbnail( $post );
	}
}

/**
 * Disable Lazy Loading on non-singular views
 *
 * @filter lazyload_is_enabled
 * @return bool
 */
add_action( 'wp', 'rebalance_remove_lazy_load_hooks' );
function rebalance_remove_lazy_load_hooks() {
    if ( is_singular() || ! class_exists( 'Jetpack_Lazy_Images' ) ) {
        return;
    }

    $instance = Jetpack_Lazy_Images::instance();
    add_action( 'wp_head', array( $instance, 'remove_filters' ), 10000 );
    remove_action( 'wp_enqueue_scripts', array( $instance, 'enqueue_assets' ) );
}
