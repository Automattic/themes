<?php
	/**
 * @package Apostrophe 2
 *
 * The template for displaying comments.
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

	<?php // Display the comments, if we have some ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			printf( // WPCS: XSS OK.
				esc_html( _nx( 'One comment', '%s comments', get_comments_number(), 'comments title', 'apostrophe-2' ) ),
			number_format_i18n( get_comments_number() ) );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'apostrophe-2' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&laquo; Older Comments', 'apostrophe-2' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &raquo;', 'apostrophe-2' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 120,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'apostrophe-2' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( esc_html__( '&laquo; Older Comments', 'apostrophe-2' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &raquo;', 'apostrophe-2' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' !== get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<h2 class="no-comments"><?php esc_html_e( 'Comments are closed.', 'apostrophe-2' ); ?></h2>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
