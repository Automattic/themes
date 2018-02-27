<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package TextBook
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function textbook_jetpack_setup() {

	// Add theme support for core logo
	add_theme_support( 'custom-logo', array(
		'height'     => 100,
		'width'      => 200,
		'flex-width' => true,
	) );

	add_theme_support( 'featured-content', array(
		'filter'     => 'textbook_get_featured_content',
		'max_posts'  => 4,
		'post_types' => array( 'post', 'page', 'jetpack-portfolio' ),
	) );

	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'wrapper'   => false,
		'type'      => 'click',
		'render'    => 'textbook_infinite_scroll_render',
		'footer'    => 'page',
	) );

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for Social Menus
	add_theme_support( 'jetpack-social-menu', 'svg' );

	// Add JetPack Content Options
	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => false,
		'author-bio'   => true,
		'post-details' => array(
			'stylesheet' => 'textbook-style',
			'date'       => '.posted-on, .entry-meta .meta-sep',
			'categories' => '.cat-links',
			'tags'       => false,
		),
	) );

	// Add theme support for testimonials
	add_theme_support( 'jetpack-testimonial' );
}
add_action( 'after_setup_theme', 'textbook_jetpack_setup' );

/*
 * Custom render function for Infinite Scroll.
 */
function textbook_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'components/post/content', 'card' );
	}
}

/**
 * Force Infinite Scroll on Search result pages
 */
function textbook_is_search_support() {
    $supported = current_theme_supports( 'infinite-scroll' ) && ( is_home() || is_archive() || is_search() );

    return $supported;
}
add_filter( 'infinite_scroll_archive_supported', 'textbook_is_search_support' );

/*
 * Site logo display function.
 */
function textbook_the_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }
}

/*
 * Social menu display function.
 */
function textbook_social_menu() {
	if ( ! function_exists( 'jetpack_social_menu' ) ) {
		return;
	} else {
		jetpack_social_menu();
	}
}

/**
 * Helper function to check for Featured Content
 *
 * @param (integer)
 * @return (boolean) true/false
 */
function textbook_has_featured_posts( $minimum = 1 ) {
    if ( is_paged() )
        return false;

    $minimum = absint( $minimum );
    $featured_content = apply_filters( 'textbook_get_featured_content', array() );

    if ( ! is_array( $featured_content ) )
        return false;

    if ( $minimum > count( $featured_content ) )
        return false;

    return true;
}

/**
 * Getter function for Featured Content
 *
 * @return (string) The value of the filter defined in add_theme_support( 'featured-content' ).
 */
function textbook_get_featured_content() {
	return apply_filters( 'textbook_get_featured_content', array() );
}

function textbook_get_featured_content_ids() {

	// Get array of cached results if they exist.
	$featured_ids = get_transient( 'featured_content_ids' );

	if ( false === $featured_ids ) {

		$featured_options = get_option( 'featured-content', FALSE );
		$featured_tag_name = $featured_options[ 'tag-name' ];
		$term = get_term_by( 'name', $featured_tag_name, 'post_tag' );

		if ( $term ) {
			// Query for featured posts.
			$featured_ids = get_posts( array(
				'fields'           => 'ids',
				'numberposts'      => $max_posts,
				'post_type'        => array( 'post', 'page', 'jetpack-portfolio' ),
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

/*
 * Add breadcrumbs to a page (not blog post)
 */
function textbook_breadcrumbs() {

	if ( function_exists( 'jetpack_breadcrumbs' ) ) {

		jetpack_breadcrumbs();

	}

}

/**
 * Return early if Author Bio is not available.
 */
function textbook_author_bio() {

    if ( ! function_exists( 'jetpack_author_bio' ) ) {

        return;

    } else {

        jetpack_author_bio();
    }
}

/**
 * Author Bio Avatar Size.
 */
function textbook_author_bio_avatar_size() {

	return 48; // in px

}
add_filter( 'jetpack_author_bio_avatar_size', 'textbook_author_bio_avatar_size' );