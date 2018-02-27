<?php
	/**
 * @package Apostrophe 2
 *
 * Featured post functionality
 */

function apostrophe_2_get_featured_posts() {
    return apply_filters( 'apostrophe_2_get_featured_posts', array() );
}
/**
 * Looks up featured posts via a filter or uses ones provided by Jetpack.
 *
 * @return WP_Query
 */
function apostrophe_2_has_featured_posts( $minimum = 1 ) {
    if ( is_paged() )
        return false;

    $minimum = absint( $minimum );
    $featured_posts = apply_filters( 'apostrophe_2_get_featured_posts', array() );

    if ( ! is_array( $featured_posts ) )
        return false;

    if ( $minimum > count( $featured_posts ) )
        return false;

    return true;
}

/**
 * Returns true if the given post is featured.
 *
 * @return bool Whether the given post is featured or not.
 */
function apostrophe_2_is_featured( $post_id = null ) {
	$post = get_post( $post_id );
	$featured = false;

	$term_id = apostrophe_2_get_jetpack_featured_content_term_id();
	if ( ! $term_id ) {
		return $featured;
	}

	$post_tags = wp_get_object_terms( $post->ID, 'post_tag' );

	if ( in_array( $term_id, wp_list_pluck( $post_tags, 'term_id' ) ) ) {
		$featured = true;
	}

	return $featured;
}

/*
 * Gets the featured content by ID.
 */
function apostrophe_2_get_jetpack_featured_content_term_id() {
	if ( ! method_exists( 'Featured_Content', 'get_setting' ) ) {
		return 0;
	}
	$term = get_term_by( 'name', Featured_Content::get_setting( 'tag-name' ), 'post_tag' );
	if ( ! $term ) {
		return 0;
	}
	return $term->term_id;
}
