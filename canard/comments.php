<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Canard
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
				  /* translators: %s: post title */
				  printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'canard' ), get_the_title() );
				} else {
				  printf(
				    /* translators: 1: number of comments, 2: post title */
				    _nx(
				      '%1$s thoughts on &ldquo;%2$s&rdquo;',
				      '%1$s thoughts on &ldquo;%2$s&rdquo;',
				      $comments_number,
				      'comments title',
				      'canard'
				    ),
				    number_format_i18n( $comments_number ),
				    get_the_title()
				  );
				}
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 60,
					'short_ping'  => true,
					'style'       => 'ol',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'canard' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'canard' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'canard' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'canard' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
