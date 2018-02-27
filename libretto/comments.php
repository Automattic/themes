<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Libretto
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

<?php if ( have_comments() ) : // Show list of comments ?>
	<h2 class="comments-title">
	<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'libretto' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Show comment navigation at top ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'libretto' ); ?></h1>

			<div class="previous">
				<?php previous_comments_link( '<span class="meta-nav">' . esc_html__( 'Older Comments', 'libretto' ) . '</span>' ); ?>
			</div>

			<div class="next">
				<?php next_comments_link( '<span class="meta-nav">' . esc_html__( 'Newer Comments', 'libretto' ) . '</span>' ); ?>
			</div>

		</nav><!-- #comment-nav-above -->
	<?php endif; // End comment navigation ?>

	<ol class="comment-list">
	<?php
		wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 64,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Show comment navigation at bottom ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'libretto' ); ?></h1>

			<div class="previous">
				<?php previous_comments_link( '<span class="meta-nav">' . esc_html__( 'Older Comments', 'libretto' ) . '</span>' ); ?>
			</div>

			<div class="next">
				<?php next_comments_link( '<span class="meta-nav">' . esc_html__( 'Newer Comments', 'libretto' ) . '</span>' ); ?>
			</div>

		</nav><!-- #comment-nav-above -->
	<?php endif; // End comment navigation ?>

<?php endif; // have_comments() ?>

<?php // If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && '0' !== get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
	<h3 class="no-comments"><?php esc_html_e( 'Comments are now closed.', 'libretto' ); ?></h3>
<?php endif; ?>

<?php comment_form(); ?>

</div><!-- #comments -->
