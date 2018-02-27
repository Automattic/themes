<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Scratchpad
 */

if ( ! function_exists( 'scratchpad_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function scratchpad_posted_on() {
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
		esc_html_x( 'Posted on %s', 'post date', 'scratchpad' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'scratchpad' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';  // WPCS: XSS OK.
}
endif;

if ( ! function_exists( 'scratchpad_post_format' ) ) :
/**
 *	Prints Post Format and link to archives
 */
function scratchpad_post_format() {
	$format = get_post_format();
	$formats = get_theme_support( 'post-formats' );
	$postformat = '';

	if ( $format && in_array( $format, $formats[0] ) ) {
		echo sprintf( '<span class="post-format-label entry-format-' . esc_attr( $format ) . '"><a href="%1$s" title="%2$s">%3$s</a></span><span class="sep">&bull;</span>', // WPCS: XSS OK.
		esc_url( get_post_format_link( $format ) ),
		sprintf( esc_attr_x( 'All %1$s posts', 'post format archives link', 'scratchpad' ), get_post_format_string( $format ) ),
			esc_html( get_post_format_string( $format ) ) );
		}
	}
endif;

if ( ! function_exists( 'scratchpad_categories' ) ) :
/**
 * Prints HTML for categories
 */
function scratchpad_categories() {
	/* translators: used between list items, there is a space after the comma */
	$categories_list = get_the_category_list( esc_html__( ', ', 'scratchpad' ) );
	if ( $categories_list && scratchpad_categorized_blog() ) {
		echo '<span class="cat-links"><span class="screen-reader-text">' . esc_html__( 'Posted in', 'scratchpad' ) . '</span> ' . $categories_list . '</span>'; // WPCS: XSS OK.
	}
}
endif;

if ( ! function_exists( 'scratchpad_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the tags and comments.
 */
function scratchpad_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'scratchpad' ) );
		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			echo '<span class="tags-links"><span class="tags-header">' . esc_html__( 'Tagged:', 'scratchpad' ) . '</span> ' . $tags_list . '</span>'; // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'scratchpad' ), esc_html__( '1 Comment', 'scratchpad' ), esc_html__( '% Comments', 'scratchpad' ) );
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'scratchpad_post_navigation' ) ) :
/**
 * Special post navigation
 */
function scratchpad_post_navigation() {
	echo '<div class="post-navigation-container">';
	the_post_navigation(array(
		'prev_text' => sprintf( '<span class="post-navigation-header">%s</span> %s', esc_html__( 'Previous Post', 'scratchpad' ), '%title' ),
		'next_text' => sprintf( '<span class="post-navigation-header">%s</span> %s', esc_html__( 'Next Post', 'scratchpad' ), '%title' ),
	));
	get_template_part( 'images/inline', 'little-pencil.svg' );
	echo '</div>';
}
endif;


if ( ! function_exists( 'scratchpad_sticky' ) ) :
/**
 * Write the highlight to the page for sticky posts
 */
function scratchpad_sticky() {
	if ( is_sticky() && is_front_page() ) { ?>
		<span class="featured-post">
			<?php get_template_part( 'images/inline', 'highlighter.svg' ); ?>
			<span class="screen-reader-text"><?php esc_html_e( 'Featured', 'scratchpad' ); ?></span>
		</span>
	<?php }
}
endif;


/**
 * Displays pens and pencils between posts randomly
 */
function scratchpad_pieces( $currentpost ) {
	if ( 0 === $currentpost % 3 ) {

		$stationary = array(
			'little-pencil.svg',
			'pencil.svg',
			'pencil-sharpener.svg',
			'grip-pencil.svg',
			'pencil-shaving.svg',
		);

		shuffle( $stationary );

		echo '<div class="separator">';
		get_template_part( 'images/inline', $stationary[0] );
		echo '</div>';
	}
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function scratchpad_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'scratchpad_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'scratchpad_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so scratchpad_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so scratchpad_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in scratchpad_categorized_blog.
 */
function scratchpad_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'scratchpad_categories' );
}
add_action( 'edit_category', 'scratchpad_category_transient_flusher' );
add_action( 'save_post',     'scratchpad_category_transient_flusher' );
