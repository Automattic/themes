<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Ixion
 */

if ( ! function_exists( 'ixion_post_meta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ixion_post_meta() {

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

	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

	$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'ixion' ) );
	if ( $categories_list && ixion_categorized_blog() ) {
		$cat_list = sprintf( '<span class="cat-links">' . esc_html__( '%1$s', 'ixion' ) . '</span>', $categories_list ); // WPCS: XSS OK.
	} else {
		$cat_list = '';
	}

	echo '<span class="posted-on">' . $posted_on . '</span> <span class="byline">' . $byline . '</span> ' . $cat_list; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'ixion_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function ixion_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'ixion' ) ), esc_html__( ', ', 'ixion' ), '</span>' );
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'ixion' ), esc_html__( '1 Comment', 'ixion' ), esc_html__( '% Comments', 'ixion' ) );
		echo '</span>';
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function ixion_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'ixion_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = is_countable( $all_the_cool_cats ) ? count( $all_the_cool_cats ) : 0;

		set_transient( 'ixion_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so ixion_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so ixion_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in ixion_categorized_blog.
 */
function ixion_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'ixion_categories' );
}
add_action( 'edit_category', 'ixion_category_transient_flusher' );
add_action( 'save_post',     'ixion_category_transient_flusher' );
