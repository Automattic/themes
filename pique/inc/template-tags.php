<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Pique
 */

if ( ! function_exists( 'pique_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function pique_posted_on() {
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

		$posted_on = sprintf( '%s', '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>' );

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'pique' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

		edit_post_link( esc_html__( 'Edit', 'pique' ), '<span class="edit-link">', '</span>' );

	}
endif;

if ( ! function_exists( 'pique_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function pique_entry_footer() {
		// Hide category and tag text, as well as comment links, for pages.
		if ( 'post' === get_post_type() ) :
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'pique' ) );
			if ( $categories_list && pique_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'pique' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'pique' ) );
			if ( $tags_list && ! is_wp_error( $tags_list ) ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'pique' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}

			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link">';
				comments_popup_link( esc_html__( 'Leave a comment', 'pique' ), esc_html__( '1 Comment', 'pique' ), esc_html__( '% Comments', 'pique' ) );
				echo '</span>';
			}

		endif; // post = get_post_type()
	}
endif;

/**
 * Returns an accessibility-friendly link to edit a post or page.
 * This also gives us a little context about what exactly we're editing
 * (post or page?) so that users understand a bit more where they are in terms
 * of the template hierarchy and their content. Helpful when/if the single-page
 * layout with multiple posts/pages shown gets confusing.
 */
function pique_edit_link( $id ) {
	if ( is_page() ) :
		$type = esc_html__( 'Page', 'pique' );
	elseif ( get_post( $id ) ) :
		$type = esc_html__( 'Post', 'pique' );
	endif;
	$link = edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %1$s %2$s', 'pique' ),
			esc_html( $type ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
	return $link;
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function pique_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'pique_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'pique_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so pique_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so pique_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in pique_categorized_blog.
 */
function pique_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'pique_categories' );
}
add_action( 'edit_category', 'pique_category_transient_flusher' );
add_action( 'save_post',     'pique_category_transient_flusher' );
