<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package photos
 */

if ( ! function_exists( 'photos_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function photos_posted_on() {
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

		echo '<span class="posted-on"><span class="screen-reader-text">' . esc_html_x( 'Posted on', 'post date', 'photos' ) . '</span> <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a></span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'photos_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function photos_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'By %s', 'post author', 'photos' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'photos_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function photos_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'photos' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'photos' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'photos' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'photos' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'photos' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}
	}
endif;

if ( ! function_exists( 'photos_editor_link' ) ) :
	/**
	 * This just outputs the edit link, just removed from photos_entry_footer()
	 * which is where it lives in Underscores.
	 */
	function photos_editor_link() {
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'photos' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'photos_post_thumbnail' ) ) :
	/**
	 * Displays an post thumbnail (if one is set), otherwise displays a blank red square.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div element when on single views.
	 */
	function photos_post_thumbnail() {
		$post_id = get_the_id();

		$image = '';

		if ( photos_has_post_thumbnail( $post_id ) || is_single() ) {
			// thumbnail default is 640x640
			$image = get_the_post_thumbnail( $post_id, 'photos-grid-thumb' );
		}

		$class = ( empty( $image ) ) ? "post-no-thumbnail" : "post-thumbnail";
		$icon = photos_post_icon();

		if ( is_singular() ) :
			$image = get_the_post_thumbnail( $post_id, 'photos-featured' );
			if ( ! empty( $image ) ) : ?>

			<div class="<?php esc_html_e( $class ); ?>">
				<?php echo $image; // WPCS: XSS OK. ?>
			</div><!-- .post-thumbnail -->

			<?php endif;
		elseif ( post_password_required() || is_attachment() ) :  ?>

			<a class="<?php esc_html_e( $class ); ?>" href="<?php the_permalink(); ?>">
				<?php echo $icon . $image; // WPCS: XSS OK. ?>
				<span class="screen-reader-text"><?php the_title(); ?></span>
			</a>

		<?php
		else : ?>
			<a class="<?php esc_html_e( $class ); ?>" href="<?php the_permalink(); ?>">
				<?php echo $icon . $image; // WPCS: XSS OK. ?>
				<span class="screen-reader-text"><?php the_title(); ?></span>
			</a>

		<?php
		endif;

	}
endif;


if ( ! function_exists( 'photos_post_navigation' ) ) :
	/**
	 * Displays an the post navigation with an SVG arrow and post title + thumbnail (if one is set)
	 */
	function photos_post_navigation() {
		$navigation = '';
		$previous = '';
		$next = '';

		if ( get_previous_post() ) {
			$prev_post = get_previous_post();
			// $prev_thumbnail = get_the_post_thumbnail( $prev_post->ID );
			$prev_thumbnail = '';
			$prev_arrow = '<div class="previous arrow">' . get_previous_post_link( '%link', photos_get_svg( array( 'icon' => 'previous', 'title' => __( 'Previous Post', 'photos' ) ) ) ) . '</div>';

			$previous = '<div class="nav-previous">' . $prev_arrow . $prev_thumbnail . '<span class="nav-meta">' . esc_html__( 'Previous Post', 'photos' ) . '</span>' . get_previous_post_link( '%link', '%title' ) . '</div>';
		}

		if ( get_next_post( ) ) {
			$next_post = get_next_post();
			// $next_thumbnail = ( ! empty( $next_post ) ) ? get_the_post_thumbnail( $next_post->ID ) : '';
			$next_thumbnail = '';
			$next_arrow = '<div class="next arrow">' . get_next_post_link( '%link', photos_get_svg( array( 'icon' => 'next', 'title' => __( 'Next Post', 'photos' ) ) ) ) . '</div>';

			$next = '<div class="nav-next">' . $next_arrow . $next_thumbnail . '<span class="nav-meta">' . esc_html__( 'Next Post', 'photos' ) . '</span>' . get_next_post_link( '%link', '%title' ) . '</div>';
		}

		// Only add markup if there's somewhere to navigate to.
		if ( $previous || $next ) {
			$navigation	= '
	<nav class="navigation post-navigation" role="navigation">
        <h2 class="screen-reader-text">' . esc_html__( 'Post navigation', 'photos' ) . '</h2>
        <div class="nav-links">' . $previous . $next . '</div>
    </nav>';
		}

		echo $navigation; // WPCS: XSS OK.
	}
endif;