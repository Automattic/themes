<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Toujours
 */

if ( ! function_exists( 'toujours_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function toujours_posted_on() {
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
		'<span>' . esc_html_x( 'Published on %s', 'post date', 'toujours' ) . '</span>',
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'toujours' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span> <span class="byline">' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;


if ( ! function_exists( 'toujours_comment_link' ) ) :
/**
 * Prints a link to the comments
 */
function toujours_comment_link() {
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'toujours' ), esc_html__( '1 Comment', 'toujours' ), esc_html__( '% Comments', 'toujours' ) );
		echo '</span>';
	}
}
endif;


if ( ! function_exists( 'toujours_post_format' ) ) :
function toujours_post_format() {
	$format = get_post_format();
	$formats = get_theme_support( 'post-formats' );
	$postformat = '';

	if ( $format && in_array( $format, $formats[0] ) ) {
		echo sprintf( '<span class="post-format-label entry-format-' . esc_attr( $format ) . '"><a href="%1$s" title="%2$s">%3$s</a></span><span class="sep">&bull;</span>', // WPCS: XSS OK.
			esc_url( get_post_format_link( $format ) ),
			sprintf( esc_attr_x( 'All %1$s posts', 'post format archives link', 'toujours' ), get_post_format_string( $format ) ),
			esc_html( get_post_format_string( $format ) ) );
	}
}
endif;


if ( ! function_exists( 'toujours_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and edit post link
 */
function toujours_entry_footer() {

	toujours_post_format();

	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'toujours' ) );
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'toujours' ) );

		if ( $categories_list && toujours_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Categories %1$s', 'toujours' ) . '</span>', $categories_list ); // WPCS: XSS OK.

			// if both categories and tags are present, add a divider
			if ( $tags_list && ! is_wp_error( $tags_list ) ) {
				echo '<span class="sep">&bull;</span>';
			}
		}

		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tags %1$s', 'toujours' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'toujours' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link"><span class="sep">&bull;</span>','</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function toujours_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'toujours_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'toujours_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so toujours_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so toujours_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in toujours_categorized_blog.
 */
function toujours_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'toujours_categories' );
}
add_action( 'edit_category', 'toujours_category_transient_flusher' );
add_action( 'save_post',     'toujours_category_transient_flusher' );
