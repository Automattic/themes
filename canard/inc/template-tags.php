<?php

if ( ! function_exists( 'canard_entry_categories' ) ) :
/**
 * Prints HTML with meta information for the categories.
 */
function canard_entry_categories() {
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'canard' ) );
		if ( $categories_list && canard_categorized_blog() ) {
			printf( '<div class="entry-meta"><span class="cat-links">%1$s</span></div>', $categories_list );
		}
	}
}
endif;

if ( ! function_exists( 'canard_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the author, post-date/time and comments.
 */
function canard_entry_meta() {
	/**
	 * Filter the author bio avatar size.
	 *
	 * @param int $size The avatar height and width size in pixels.
	 */
	$author_bio_avatar_size = apply_filters( 'canard_author_bio_avatar_size', 20 );

	$byline = sprintf( '<span class="author vcard">%1$s<a class="url fn n" href="%2$s">%3$s</a></span>',
		get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_html( get_the_author() )
	);

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

	$posted_on = sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>', esc_url( get_permalink() ), $time_string );

	if ( is_single() && ( 1 == get_theme_mod( 'canard_author_bio' ) && get_the_author_meta( 'description' ) ) ) {
		echo '<span class="posted-on">' . $posted_on . '</span>';
	} else {
		echo '<span class="byline"> ' . $byline . '</span><span class="posted-on">' . $posted_on . '</span>';
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'canard' ), __( '1 Comment', 'canard' ), __( '% Comments', 'canard' ) );
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'canard_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function canard_entry_footer() {
	canard_entry_meta();

	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		the_tags( '<span class="tags-links">', esc_html__( ', ', 'canard' ), '</span>' );
	}

	edit_post_link( __( 'Edit', 'canard' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function canard_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'canard_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'canard_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so canard_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so canard_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in canard_categorized_blog.
 */
function canard_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'canard_categories' );
}
add_action( 'edit_category', 'canard_category_transient_flusher' );
add_action( 'save_post',     'canard_category_transient_flusher' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @see wp_add_inline_style()
 */
function canard_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	if ( ! canard_jetpack_featured_image_display() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a { background-color: rgba(0, 0, 0, 0.3); border: 0; text-shadow: 0 0 0.125em rgba(0, 0, 0, 0.3); }
			.post-navigation .nav-previous a:focus, .post-navigation .nav-previous a:hover { background-color: rgba(0, 0, 0, 0.6); }
			.post-navigation .nav-previous a:focus .post-title { color: #fff; }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a { background-color: rgba(0, 0, 0, 0.3); border: 0; text-shadow: 0 0 0.125em rgba(0, 0, 0, 0.3); }
			.post-navigation .nav-next a:focus, .post-navigation .nav-next a:hover { background-color: rgba(0, 0, 0, 0.6); }
			.post-navigation .nav-next a:focus .post-title { color: #fff; }
		';
	}

	wp_add_inline_style( 'canard-style', $css );
}
add_action( 'wp_enqueue_scripts', 'canard_post_nav_background' );

/**
 * Fire the wp_body_open action.
 *
 * Add backward compatibility to support pre-5.2.0 WordPress versions.
 *
 */
if ( ! function_exists( 'wp_body_open' ) ) {
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
