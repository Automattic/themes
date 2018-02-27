<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Lodestar
 */

if ( ! function_exists( 'lodestar_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function lodestar_posted_on() {

	/* translators: used between list items, there is a space after the comma */
	$separate_meta = esc_html__( ', ', 'lodestar' );

	// Let's get a nicely formatted string for the published date
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

	// Wrap that in a link, and preface it with 'Posted on'
	$posted_on = sprintf(
		esc_html_x( 'Posted on %s', 'post date', 'lodestar' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	// Get the author name; wrap it in a link
	$byline = sprintf(
		'<span class="byline-prefix">%1$s</span> %2$s',
		esc_html_x( 'by', 'post author', 'lodestar' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	// Check to make sure we have more than one category before writing to page
	// Also, don't show when blog posts appear on static front page
	$categories_list = get_the_category_list( $separate_meta );
	$categories = '';
	if ( $categories_list && lodestar_categorized_blog() && ! is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$categories = sprintf( '<span class="cat-prefix">%1$s</span> %2$s', esc_html_x( 'in', 'prefaces list of categories assigned to the post', 'lodestar' ), $categories_list ); // WPCS: XSS OK.
	}

	// Finally, let's write all of this to the page
	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	// Make sure $categories actually exists before trying to echo.
	if ( '' !== $categories ) {
		echo '<span class="cat-links"> ' . $categories . '</span>'; // WPCS: XSS OK.
	}
}
endif;


if ( ! function_exists( 'lodestar_portfolio_meta' ) ) :
/**
 * Prints the portfolio Category
 */
function lodestar_portfolio_meta() {
	/* translators: used between list items, there is a space after the comma */
	$separate_meta = esc_html__( ', ', 'lodestar' );
	$categories = get_the_term_list( get_the_ID(), 'jetpack-portfolio-type', esc_html_x( 'Type: ', 'prefaces list of categories assigned to post', 'lodestar' ), $separate_meta, '' );

	echo '<span class="cat-links"> ' . $categories . '</span>'; // WPCS: XSS OK.
}
endif;


if ( ! function_exists( 'lodestar_edit_post_link' ) ) :
/**
 * Prints the post's edit link
 */
function lodestar_edit_post_link() {
	// Display 'edit' link
	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'lodestar' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;


if ( ! function_exists( 'lodestar_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function lodestar_entry_footer() {

	/* translators: used between list items, there is a space after the comma */
	$separate_meta = esc_html__( ', ', 'lodestar' );

	// Display Tags for posts and portfolio projects
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'lodestar' ) ), $separate_meta, '</span>' );
	} else if ( 'jetpack-portfolio' === get_post_type() ) {
		$tags_list = get_the_term_list( get_the_ID(), 'jetpack-portfolio-tag', '', $separate_meta, '' );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'lodestar' ) . '</span>', $tags_list );
		}
	}

	// Display link to comments
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'lodestar' ), esc_html__( '1 Comment', 'lodestar' ), esc_html__( '% Comments', 'lodestar' ) );
		echo '</span>';
	}

	lodestar_edit_post_link();
}
endif;


/**
 * Returns an accessibility-friendly link to edit a post or page.
 * This also gives us a little context about what exactly we're editing
 * (post or page?) so that users understand a bit more where they are in terms
 * of the template hierarchy and their content. Helpful when/if the single-page
 * layout with multiple posts/pages shown gets confusing.
 */
function lodestar_edit_link( $id ) {
	if ( is_page() ) :
		$type = esc_html__( 'Page', 'lodestar' );
	elseif ( get_post( $id ) ) :
		$type = esc_html__( 'Post', 'lodestar' );
	endif;
	$link = edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %1$s %2$s', 'lodestar' ),
			esc_html( $type ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
	return $link;
}


/**
 * Display a front page section.
 *
 * @param WP_Customize_Partial $partial Partial associated with a selective refresh request.
 * @param integer              $id Front page section to display.
 */
function lodestar_front_page_section( $partial = null, $id = 0 ) {
	if ( is_a( $partial, 'WP_Customize_Partial' ) ) {
		// Find out the id and set it up during a selective refresh.
		global $lodestarcounter;
		$id = str_replace( 'panel_', '', $partial->id );
		$lodestarcounter = $id;
	}

	global $post; // Modify the global post object before setting up post data.
	if ( get_theme_mod( 'panel_' . $id ) ) {
		$post = get_post( get_theme_mod( 'panel_' . $id ) );
		setup_postdata( $post );
		set_query_var( 'panel', $id );

		get_template_part( 'template-parts/page/content', 'front-page-panels' );

		wp_reset_postdata();
	} elseif ( is_customize_preview() ) {
		// The output placeholder anchor.
		echo '<article class="panel-placeholder panel lodestar-panel' . $id . '" id="panel' . $id . '"><span class="lodestar-panel-title">' . sprintf( esc_html__( 'Front Page Section %1$s Placeholder', 'lodestar' ), $id ) . '</span></article>';
	}
}

if ( ! function_exists( 'lodestar_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function lodestar_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lodestar' ), array( 'span' => array( 'class' => array() ) ) ),
			'<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
		)
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'lodestar_excerpt_more' );
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function lodestar_categorized_blog() {
	$category_count = get_transient( 'lodestar_categories' );
	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );
		set_transient( 'lodestar_categories', $category_count );
	}
	return $category_count > 1;
}
/**
 * Flush out the transients used in twentyseventeen_categorized_blog.
 */
function lodestar_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'lodestar_categories' );
}
add_action( 'edit_category', 'lodestar_category_transient_flusher' );
add_action( 'save_post',     'lodestar_category_transient_flusher' );
