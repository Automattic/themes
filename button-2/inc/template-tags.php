<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Button 2
 */

if ( ! function_exists( 'button_2_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function button_2_posted_on() {
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

	if ( is_sticky() ) {
		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html__( 'Featured', 'button-2' ) . '</a>';
	} else {
		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
	}

	$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'button-2' ), esc_html__( '1 Comment', 'button-2' ), esc_html__( '% Comments', 'button-2' ) );
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'button-2' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'button_2_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the tags and comments.
 */
function button_2_entry_footer() {

	// Hide tag text for pages and archives
	if ( 'post' == get_post_type() && is_single() ) {
		the_tags( '<div class="tags-links">', ' ', '</div>' );
	}
}
endif;


if ( ! function_exists( 'button_2_entry_cats' ) ) :
/**
 * Prints HTML with meta information for the categories.
 */
function button_2_entry_cats() {
	// Hide category text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space */
		$categories_list = get_the_category_list( esc_html__( ' &middot; ', 'button-2' ) );
		if ( $categories_list && button_2_categorized_blog() ) {
			printf( '<span class="cat-links">%1$s</span>', $categories_list ); // WPCS: XSS OK.
		}
	}
}
endif;


/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function button_2_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'button_2_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'button_2_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so button_2_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so button_2_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in button_2_categorized_blog.
 */
function button_2_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'button_2_categories' );
}
add_action( 'edit_category', 'button_2_category_transient_flusher' );
add_action( 'save_post',     'button_2_category_transient_flusher' );


if ( ! function_exists( 'button_2_continue_reading_link' ) ) :
/**
 * Returns an ellipsis and "Continue reading" plus off-screen title link for excerpts
 */
function button_2_continue_reading_link() {
	return '&hellip; <a href="'. esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( 'Continue reading <span class="screen-reader-text">%1$s</span>', 'button-2' ), esc_attr( strip_tags( get_the_title() ) ) ) . '</a>';
}
endif; // button_2_continue_reading_link

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with button_2_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function button_2_auto_excerpt_more() {
	return button_2_continue_reading_link();
}
add_filter( 'excerpt_more', 'button_2_auto_excerpt_more' );


/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @return string URL
 */
function button_2_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
