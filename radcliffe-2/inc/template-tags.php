<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Radcliffe 2
 */

if ( ! function_exists( 'radcliffe_2_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time, author, and comments.
 */
function radcliffe_2_posted_on() {
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

	$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

	if ( is_sticky() && ! is_single() && ! is_archive() ) {
		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_html__( 'Featured', 'radcliffe-2' ) . '</a>';
	} elseif ( is_single() ) {
		$posted_on = $time_string;
	} else {
		$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
	}

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline">' . $byline . '</span>'; // WPCS: XSS OK.

	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	echo '<span class="comments-link">';
	comments_popup_link(
		sprintf(
			wp_kses(
				/* translators: %s: post title */
				__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'radcliffe-2' ),
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

if ( ! function_exists( 'radcliffe_2_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and edit link.
 */
function radcliffe_2_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'radcliffe-2' ) );
		if ( $categories_list && ! is_wp_error( $categories_list ) ) {
			/* translators: 1: list of categories. */
			echo '<span class="cat-links">' . radcliffe_2_get_svg( array( 'icon' => 'category', 'title' => esc_html__( 'Categories', 'radcliffe-2' ) ) ) . $categories_list . '</span>';
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'radcliffe-2' ) );
		if ( $tags_list && ! is_wp_error( $tags_list ) ) {
			/* translators: 1: list of tags. */
			echo '<span class="tags-links">' . radcliffe_2_get_svg( array( 'icon' => 'tag', 'title' => esc_html__( 'Tags', 'radcliffe-2' ) ) ) . $tags_list . '</span>';
		}
	}

	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="screen-reader-text">%s</span>', 'radcliffe-2' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		),
		'<span class="edit-link">' . radcliffe_2_get_svg( array( 'icon' => 'edit', 'title' => esc_html__( 'Edit', 'radcliffe-2' ) ) ),
		'</span>'
	);
}
endif;

if ( ! function_exists( 'radcliffe_2_comment' ) ) :
/**
 *  Radcliffe comment function
 */
function radcliffe_2_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>

	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment-content">
			<?php esc_html_e( 'Pingback:', 'radcliffe-2' ); ?> <?php comment_author_link(); ?>
		</div>
		<div class="comment-actions">
			<?php edit_comment_link( esc_html__( 'Edit', 'radcliffe-2' ), '', '' ); ?>
		</div>
	</li>

	<?php
		break;
		default :
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<?php echo get_avatar( $comment, 80 ); ?>

			<?php
				static $comment_number; $comment_number ++;
				$comment_number = str_pad( $comment_number, 2, '0', STR_PAD_LEFT );
			?>

			<?php if ( $comment->user_id === $post->post_author ) {
				echo '<span class="vcard h-card"><a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '" title="' . esc_attr__( 'Comment by post author','radcliffe-2' ) . '" class="by-post-author p-name fn"> ' . esc_html__( '(Post author)', 'radcliffe-2' ) . '</a></span>';
			} ?>

			<div class="comment-wrapper">
				<div class="comment-header">
					<cite><?php echo get_comment_author_link(); ?></cite>
					<span><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php echo get_comment_date() . ' &mdash; ' . get_comment_time() ?></a></span>
				</div>

				<div class="comment-content">
					<?php if ( '0' === $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'radcliffe-2' ); ?></p>
					<?php endif; ?>
					<?php comment_text(); ?>
				</div><!-- /comment-content -->

				<div class="comment-actions">
					<?php edit_comment_link( esc_html__( 'Edit', 'radcliffe-2' ), '', '' ); ?>
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'radcliffe-2' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div> <!-- /comment-actions -->
			</div> <!-- /comment-wrapper -->
		</div><!-- /comment-## -->
	<?php
		break;
		endswitch;
}
endif;
