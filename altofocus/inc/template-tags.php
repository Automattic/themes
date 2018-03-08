<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package AltoFocus
 */

if ( ! function_exists( 'altofocus_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function altofocus_posted_on() {

	// Set date & time
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

	// Set author/byline info
	$byline = sprintf(
		esc_html_x( 'Written by %s', 'post author', 'altofocus' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	// Date markup
	echo '<div class="posted-on">' . $posted_on . '</div>'; // WPCS: XSS OK.

	// Author markup
	echo '<div class="byline"> ' . $byline . '</div>'; // WPCS: XSS OK.

	// Show edit link
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'altofocus' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

if ( ! function_exists( 'altofocus_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function altofocus_entry_footer() {

	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_term_list( get_the_ID(), 'category', '<ul><li>', '</li><li>', '</li></ul>' );
		if ( $categories_list && altofocus_categorized_blog() ) {

			printf( '<div class="cat-links">' . esc_html__( 'Categories %1$s', 'altofocus' ) . '</div>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_term_list( get_the_ID(), 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' );
		if ( $tags_list ) {

			printf( '<div class="tags-links">' . esc_html__( 'Tags %1$s', 'altofocus' ) . '</div>', $tags_list ); // WPCS: XSS OK.
		}
	}
}
endif;

/**
 * Strips slideshow gallery shortcodes form the content
 */
function altofocus_strip_override_shortcode( $content ) {

	preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );

	if ( ! empty( $matches ) ) {

		foreach ( $matches as $shortcode ) {

			if ( 'gallery' === $shortcode[2] ) {

				$pos = strpos( $content, $shortcode[0] );

				if ( false !== $pos ) {

					return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
				}
			}
		}
	}

	return $content;
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function altofocus_categorized_blog() {

	if ( false === ( $all_the_cool_cats = get_transient( 'altofocus_categories' ) ) ) {

		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'altofocus_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {

		// This blog has more than 1 category so altofocus_categorized_blog should return true.
		return true;

	} else {

		// This blog has only 1 category so altofocus_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in altofocus_categorized_blog.
 */
function altofocus_category_transient_flusher() {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Like, beat it. Dig?
	delete_transient( 'altofocus_categories' );
}
add_action( 'edit_category', 'altofocus_category_transient_flusher' );
add_action( 'save_post',     'altofocus_category_transient_flusher' );
