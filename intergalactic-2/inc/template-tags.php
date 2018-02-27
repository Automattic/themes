<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Intergalactic 2
 */

if ( ! function_exists( 'intergalactic_2_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function intergalactic_2_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'intergalactic-2' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'intergalactic-2' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function intergalactic_2_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'intergalactic_2_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'intergalactic_2_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so intergalactic_2_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so intergalactic_2_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in intergalactic_2_categorized_blog.
 */
function intergalactic_2_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'intergalactic_2_categories' );
}
add_action( 'edit_category', 'intergalactic_2_category_transient_flusher' );
add_action( 'save_post',     'intergalactic_2_category_transient_flusher' );
