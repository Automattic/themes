<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Dara
 */

if ( ! function_exists( 'dara_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function dara_posted_on() {

	if ( 'post' === get_post_type() ) {
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

		$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'dara' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);

}
endif;

if ( ! function_exists( 'dara_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function dara_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {

		/* translators: used between list items, there is a space after the comma */
		the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'dara' ) ), esc_html__( ', ', 'dara' ), '</span>' );
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'dara' ), esc_html__( '1 Comment', 'dara' ), esc_html__( '% Comments', 'dara' ) );
		echo '</span>';
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function dara_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dara_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dara_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dara_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dara_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in dara_categorized_blog.
 */
function dara_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'dara_categories' );
}
add_action( 'edit_category', 'dara_category_transient_flusher' );
add_action( 'save_post',     'dara_category_transient_flusher' );


/**
 * Change the class of the hero area depending on featured image.
 */
function dara_additional_class() {

	$jetpack_options = get_theme_mod( 'jetpack_testimonials' );

	if ( is_post_type_archive() && ( ! isset( $jetpack_options['featured-image'] ) || ! $jetpack_options['featured-image'] ) ) {
		$additional_class = 'without-featured-image';
	} else if ( is_page() && ( ! has_post_thumbnail() || ! dara_activate_featured_image() ) ) {
		$additional_class = 'without-featured-image';
	} else {
		$additional_class = 'with-featured-image';
	}

	return $additional_class;
}


/**
 * Display featured pages.
 */
function dara_featured_pages() {
	$featured_page_1 = esc_attr( get_theme_mod( 'dara_featured_page_one_front_page', '0' ) );
	$featured_page_2 = esc_attr( get_theme_mod( 'dara_featured_page_two_front_page', '0' ) );
	$featured_page_3 = esc_attr( get_theme_mod( 'dara_featured_page_three_front_page', '0' ) );

	if ( 0 === $featured_page_1 && 0 === $featured_page_2 && 0 === $featured_page_3 ) {
		return;
	}
?>

	<div id="quaternary" class="featured-page-area">
		<div class="featured-page-wrapper clear">

			<?php for ( $page_number = 1; $page_number <= 3; $page_number++ ) : ?>
				<?php if ( 0 != ${'featured_page_' . $page_number} ) : // Check if a featured page has been set in the customizer ?>
					<div class="featured-page">

						<?php
							// Create new argument using the page ID of the page set in the customizer
							$featured_page_args = array(
								'page_id' => ${'featured_page_' . $page_number},
							);
							// Create a new WP_Query using the argument previously created
							$featured_page_query = new WP_Query( $featured_page_args );
						?>

						<?php while ( $featured_page_query->have_posts() ) : $featured_page_query->the_post(); ?>

							<?php get_template_part( 'components/post/content', 'grid' ); ?>

						<?php
							endwhile;
							wp_reset_postdata();
						?>
					</div><!-- .featured-page -->
				<?php endif; ?>
			<?php endfor; ?>

		</div><!-- .featured-page-wrapper -->
	</div><!-- #quaternary -->

<?php
}
