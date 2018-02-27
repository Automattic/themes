<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Independent_Publisher_2
 */


if ( ! function_exists( 'independent_publisher_2_posted_time' ) ) :
/**
 * Returns the <time> element containing the post publication/modification date.
 */
function independent_publisher_2_posted_time() {
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
	return $time_string;
}
endif;

if ( ! function_exists( 'independent_publisher_2_entry_header' ) ) :
/**
 * Displays the HTML for.entry-header on posts and pages.
 */
function independent_publisher_2_entry_header() {

	// Show sticky post label on archive views, when on the first page, and when no featured image is set.
	if ( is_sticky() && ! is_singular() && ! is_paged() && ! independent_publisher_2_has_post_thumbnail() ) {
		printf( '<span class="sticky-label">%s</span>', esc_html__( 'Featured', 'independent-publisher-2' ) );
	}

	// Conditionally display the entry header.
	$title = get_the_title();
	if ( ! empty( $title ) ) : ?>
		<header class="entry-header">
			<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
				endif;
			?>
		</header><!-- .entry-header --><?php
	endif;
}
endif;

if ( ! function_exists( 'independent_publisher_2_entry_meta' ) ) :
/**
 * Prints HTML with meta information for author and categories.
 */
function independent_publisher_2_entry_meta() { ?>
		<div class="entry-meta">
			<span class="byline">
				<?php the_author_posts_link(); ?>
			</span>
			<?php if ( 'post' === get_post_type() ) { ?>
				<span class="cat-links">
					<?php
						/* translators: Used between list items, there is a space after the comma */
						echo get_the_category_list( esc_html__( ', ', 'independent-publisher-2' ) );
					?>
				</span><!-- .cat-links -->
			<?php } ?>

			<?php // Comments link
			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link">';
				comments_popup_link( esc_html__( 'Leave a comment', 'independent-publisher-2' ), esc_html__( '1 Comment', 'independent-publisher-2' ), esc_html__( '% Comments', 'independent-publisher-2' ) );
				echo '</span><!-- .comments-link -->';
			} ?>

			<span class="published-on">
				<?php if ( is_single() ) {
					echo independent_publisher_2_posted_time();
				} else { ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo independent_publisher_2_posted_time(); ?></a>
				<?php } ?>
			</span>

			<?php

			if ( independent_publisher_2_show_word_count() ) {
				printf( '<span class="word-count">%s</span>', sprintf( _nx( '%s Minute', '%s Minutes', independent_publisher_2_word_count(), 'time to read', 'independent-publisher-2' ), independent_publisher_2_word_count() ) );
			}

			// Edit post link
			if ( ! is_single() ) {
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'independent-publisher-2' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			} ?>
		</div><!-- .entry-meta -->
	<?php
}
endif;


if ( ! function_exists( 'independent_publisher_2_post_thumbnail' ) ) :
/**
 * Displays the featured image of the post.
 */
function independent_publisher_2_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! independent_publisher_2_has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) {
		the_post_thumbnail( 'independent-publisher-2-full-width' );
	} else {
		printf( '<div class="post-image-link"><a rel="bookmark" href="%1$s">', esc_url( get_permalink() ) );

		if ( is_sticky() && ! is_paged() ) {
			printf( '<span class="sticky-label">%1$s</span>', esc_html__( 'Featured', 'independent-publisher-2' ) );
		}

		the_post_thumbnail( 'independent-publisher-2-full-width' );
		echo '</a></div><!-- .post-image-link -->';
	}
}
endif;

if ( ! function_exists( 'independent_publisher_2_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function independent_publisher_2_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'independent-publisher-2' ), array( 'span' => array( 'class' => array() ) ) ),
			'<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
		)
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'independent_publisher_2_excerpt_more' );
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function independent_publisher_2_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'independent_publisher_2_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'independent_publisher_2_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so independent_publisher_2_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so independent_publisher_2_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in independent_publisher_2_categorized_blog.
 */
function independent_publisher_2_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'independent_publisher_2_categories' );
}
add_action( 'edit_category', 'independent_publisher_2_category_transient_flusher' );
add_action( 'save_post',     'independent_publisher_2_category_transient_flusher' );
