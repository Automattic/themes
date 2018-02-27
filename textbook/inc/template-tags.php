<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package TextBook
 */

if ( ! function_exists( 'textbook_posted_on' ) ) :
/*
 * Prints HTML with meta information for the current post-date/time and author.
 */
function textbook_posted_on() {

	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {

		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	if ( get_option( 'date_format' ) == 'j M Y' || get_option( 'date_format' ) == 'jMY' || get_option( 'date_format' ) == 'j m y' || get_option( 'date_format' ) == 'jmy' ) {

		$date_format = '<span class="day">' . esc_html( get_the_date( 'j' ) ) . '</span><span class="month-year">' . esc_html( get_the_date( 'M Y' ) ) . '</span>';

	} else {

		$date_format = esc_html( get_the_date() );
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		$date_format,
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="posted-on">' . $time_string . '</a>';

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<hr class="meta-sep" />';
		comments_popup_link(
			esc_html__( 'Add a comment', 'textbook' ),
			esc_html__( '1 Comment', 'textbook' ),
			esc_html__( '% Comments', 'textbook' ),
			'comments-link'
		);
	}
}
endif;

if ( ! function_exists( 'textbook_entry_footer' ) ) :
/*
 * Prints HTML with meta information for the categories, tags and comments.
 */
function textbook_entry_footer() {

	// Hide category, author, and tag text for pages.
	if ( 'post' === get_post_type() ) {

		// translators: used between list items, there is a space after the comma
		$categories_list = get_the_category_list( '' );
		if ( $categories_list && textbook_categorized_blog() ) {
			echo '<span class="cat-links"><span class="category-title">' . esc_html__( 'Categories: ', 'textbook' ) . '</span>' . $categories_list . '</span>';
		}

		// Show author bio ( only jetpack_author_bio function exists. See jetpack.php )
		textbook_author_bio();

		// Use author byline if Jetpack Author Bio doesn’t exist
		if ( ! function_exists( 'jetpack_author_bio' ) ) {

			$author_avatar_size = apply_filters( 'textbook_author_avatar_size', 32 );
			printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
				get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
				_x( 'Author', 'Used before post author name.', 'textbook' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		the_tags(
			/* translators: used before a list of the post's tags */
			'<span class="tags-links">' . __( 'Tags:', 'textbook' ) . ' ',
			/* translators: used between list items, there is a space after the comma */
			__( ', ', 'textbook' ),
			'</span>'
		);
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'textbook' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function textbook_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'textbook_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'textbook_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so textbook_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so textbook_categorized_blog should return false.
		return false;
	}
}

/*
 * Flush out the transients used in textbook_categorized_blog.
 */
function textbook_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'textbook_categories' );
}
add_action( 'edit_category', 'textbook_category_transient_flusher' );
add_action( 'save_post', 'textbook_category_transient_flusher' );

/**
 * Move Category Post Counts Inside Link
 *
 * filters wp_list_categories()
 *
 * @param  string $links link html output
 * @return string
 */
function textbook_move_category_count( $links ) {

	$links = str_replace( '</a> (', ' <span class="count">(', $links );
	$links = str_replace( ')', ')</span></a>', $links );

	return $links;
}
add_filter( 'wp_list_categories', 'textbook_move_category_count' );

/**
 * Move Archive Post Counts Inside Link
 *
 * filters get_archives_link()
 *
 * @param  string $links link html output
 * @return string
 */
function textbook_move_archive_count( $links ) {

	$links = str_replace( '</a>&nbsp;(', ' <span class="count">(', $links );
	$links = str_replace( ')', ')</span></a>', $links );

	return $links;
}
add_filter( 'get_archives_link', 'textbook_move_archive_count' );

/*
 * Create the continue reading link
 */
function textbook_continue_reading_link() {

	if ( ! is_admin() ) {
		$continue_reading = sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s', 'textbook' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		);

		return '<a class="more-link" href="' . esc_url( get_permalink() ) . '">' . $continue_reading . '</a>';
	}
}

// Filter the excerpt more link
add_filter( 'excerpt_more', 'textbook_continue_reading_link' );

// Filter the content more link
add_filter( 'the_content_more_link', 'textbook_continue_reading_link' );
