<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Publication
 */

if ( ! function_exists( 'publication_categories' ) ) :
/**
 * Prints HTML with meta information for the categories.
 */
function publication_categories() {
	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'publication' ) );
	if ( $categories_list && publication_categorized_blog() ) {
		echo '<span class="cat-links">' . $categories_list . '</span>'; // WPCS: XSS OK.
	}
}
endif;

if ( ! function_exists( 'publication_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the time, author, comments and tags.
 */
function publication_entry_footer() {
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

	echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'publication' ), esc_html__( '1 Comment', 'publication' ), esc_html__( '% Comments', 'publication' ) );
		echo '</span>';
	}

	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'publication' ) );
		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			echo '<span class="tags-links">' . $tags_list . '</span>'; // WPCS: XSS OK.
		}
	}

	edit_post_link( esc_html__( 'Edit', 'publication' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function publication_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'publication_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'publication_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so publication_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so publication_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in publication_categorized_blog.
 */
function publication_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'publication_categories' );
}
add_action( 'edit_category', 'publication_category_transient_flusher' );
add_action( 'save_post',     'publication_category_transient_flusher' );
