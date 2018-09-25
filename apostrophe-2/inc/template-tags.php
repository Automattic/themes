<?php
	/**
 * @package Apostrophe 2
 *
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 */

if ( ! function_exists( 'apostrophe_2_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function apostrophe_2_posted_on() {
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
		esc_html_x( '%s', 'post date', 'apostrophe-2' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( '%s', 'post author', 'apostrope-2' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	if ( is_sticky() && ! is_single() && ! is_archive() && ! is_paged() ) {
		echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html__( 'Featured', 'apostrophe-2' ) . '</a><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	} else {
		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	}
}
endif;

if ( ! function_exists( 'apostrophe_2_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 * Also prints a card with the author's bio.
 */
	function apostrophe_2_entry_footer() {

		// Show categories, tags, and author if we're on a post page
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list();
			if ( $categories_list ) {
				$apostrophe_2_tags = $categories_list;
			}

			$tags_list = get_the_tag_list( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' );
			if ( $tags_list && ! is_wp_error( $tags_list ) ) {
				$apostrophe_2_tags .= $tags_list;
			}

			if ( $apostrophe_2_tags ) {
				echo '<div class="apostrophe-2-tags">' . wp_kses_post( $apostrophe_2_tags ) . '</div>';
			}
		}

		if ( function_exists( 'jetpack_author_bio' ) ) jetpack_author_bio();

	}
endif;
