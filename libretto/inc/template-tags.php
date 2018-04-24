<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Libretto
 */

if ( ! function_exists( 'libretto_content_nav' ) ) :

	/**
	* Display navigation to next/previous pages when applicable
	*
	*/
	function libretto_content_nav( $nav_id ) {
		global $wp_query, $post, $paged;

		// Don't print empty markup on single pages if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}

		// Don't print empty markup in archives if there's only one page.
		if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) ) {
			return;
		}

		$nav_class = ( is_single() ) ? 'navigation-post' : 'navigation-paging';
	?>

    <nav role="navigation" id="<?php echo esc_attr( $nav_id ); ?>" class="<?php echo esc_attr( $nav_class ); ?><?php if ( 'infinite-scroll' === get_theme_mod( 'page_navigation' ) && ! is_single() ) { echo ' infinite-scroll'; } ?>">
      <h1 class="screen-reader-text"><?php esc_html_e( 'Post navigation', 'libretto' ); ?></h1>

		<?php if ( is_single() ) : // navigation links for single posts ?>

        <div class="previous">
					<?php previous_post_link( '%link', '<span class="meta-nav">'._x( 'Previous Article', 'Previous post link', 'libretto' ).'</span> %title' ); ?>
        </div>

        <div class="next">
					<?php next_post_link( '%link', '<span class="meta-nav">'._x( 'Next Article', 'Next post link', 'libretto' ).'</span> %title' ); ?>
        </div>

		<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

        <div class="previous">
        <?php if ( get_next_posts_link() ) : ?>
					<?php next_posts_link( __( '<span class="meta-nav">Older posts</span>', 'libretto' ) ); ?>
        <?php endif; ?>
        </div>

		<?php /* translators: used in pagination, as in page "x of y" */ ?>
		<div class="page-number"><?php echo intval( $paged ); ?> <span><?php _e( 'of', 'libretto' ); ?></span> <?php echo intval( $wp_query->max_num_pages ); ?></div>

        <div class="next">
        <?php if ( get_previous_posts_link() ) : ?>
			<?php previous_posts_link( __( '<span class="meta-nav">Newer posts</span>', 'libretto' ) ); ?>
        <?php endif; ?>
        </div>

    <?php endif; ?>

  </nav><!-- #<?php echo esc_html( $nav_id ); ?> -->
	<?php
	} // libretto_content_nav()
endif;

if ( ! function_exists( 'libretto_posted_on' ) ) :
	/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
	function libretto_posted_on() {
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
			esc_html_x( 'Posted on %s', 'post date', 'libretto' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		// Since this is being called outside the Loop on single post pages, we need
		// to use a workaround in order to access author info
		if ( is_singular() ) :
			$author_id = get_queried_object()->post_author;
			$author_url = get_author_posts_url( $author_id );
			$author_name = get_the_author_meta( 'display_name', $author_id );
		// Anywhere else we're inside the Loop, and we can do stuff like normal
		else :
			$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
			$author_name = get_the_author();
		endif;

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'libretto' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( $author_url ) . '">' . esc_html( $author_name ) . '</a></span>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'libretto_entry_footer' ) ) :
	/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
	function libretto_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'libretto' ) );
			if ( $categories_list && libretto_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'libretto' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'libretto' ) ), esc_html__( ', ', 'libretto' ), '</span>' );
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link( esc_html__( 'Leave a comment', 'libretto' ), esc_html__( '1 Comment', 'libretto' ), esc_html__( '% Comments', 'libretto' ) );
			echo '</span>';
		}

		edit_post_link( esc_html__( 'Edit', 'libretto' ), '<span class="edit-link">', '</span>' );
	}
endif;

if ( ! function_exists( 'the_archive_title' ) ) :
	/**
 * Shim for `the_archive_title()`.
 *
 * Display the archive title based on the queried object.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
	function the_archive_title( $before = '', $after = '' ) {
		if ( is_category() ) {
			$title = sprintf( esc_html__( 'Category: %s', 'libretto' ), single_cat_title( '', false ) );
		} elseif ( is_tag() ) {
			$title = sprintf( esc_html__( 'Tag: %s', 'libretto' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			$title = sprintf( esc_html__( 'Author: %s', 'libretto' ), '<span class="vcard">' . get_the_author() . '</span>' );
		} elseif ( is_year() ) {
			$title = sprintf( esc_html__( 'Year: %s', 'libretto' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'libretto' ) ) );
		} elseif ( is_month() ) {
			$title = sprintf( esc_html__( 'Month: %s', 'libretto' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'libretto' ) ) );
		} elseif ( is_day() ) {
			$title = sprintf( esc_html__( 'Day: %s', 'libretto' ), get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'libretto' ) ) );
		} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
				$title = esc_html_x( 'Asides', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
				$title = esc_html_x( 'Galleries', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
				$title = esc_html_x( 'Images', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
				$title = esc_html_x( 'Videos', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
				$title = esc_html_x( 'Quotes', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
				$title = esc_html_x( 'Links', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
				$title = esc_html_x( 'Statuses', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
				$title = esc_html_x( 'Audio', 'post format archive title', 'libretto' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
				$title = esc_html_x( 'Chats', 'post format archive title', 'libretto' );
			}
		} elseif ( is_post_type_archive() ) {
			$title = sprintf( esc_html__( 'Archives: %s', 'libretto' ), post_type_archive_title( '', false ) );
		} elseif ( is_tax() ) {
			$tax = get_taxonomy( get_queried_object()->taxonomy );
			/* translators: 1: Taxonomy singular name, 2: Current taxonomy term */
			$title = sprintf( esc_html__( '%1$s: %2$s', 'libretto' ), $tax->labels->singular_name, single_term_title( '', false ) );
		} else {
			$title = esc_html__( 'Archives', 'libretto' );
		}

		/**
	* Filter the archive title.
	*
	* @param string $title Archive title to be displayed.
	*/
		$title = apply_filters( 'get_the_archive_title', $title );

		if ( ! empty( $title ) ) {
			echo $before . $title . $after;  // WPCS: XSS OK.
		}
	}
endif;

if ( ! function_exists( 'the_archive_description' ) ) :
	/**
 * Shim for `the_archive_description()`.
 *
 * Display category, tag, or term description.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
	function the_archive_description( $before = '', $after = '' ) {
		$description = apply_filters( 'get_the_archive_description', term_description() );

		if ( ! empty( $description ) ) {
			/**
	 * Filter the archive description.
	 *
	 * @see term_description()
	 *
	 * @param string $description Archive description to be displayed.
	 */
			echo $before . $description . $after;  // WPCS: XSS OK.
		}
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function libretto_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'libretto_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'libretto_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so _libretto_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so libretto_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in libretto_categorized_blog.
 */
function libretto_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'libretto_categories' );
}
add_action( 'edit_category', 'libretto_category_transient_flusher' );
add_action( 'save_post',     'libretto_category_transient_flusher' );
