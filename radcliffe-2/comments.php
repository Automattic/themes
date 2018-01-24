<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radcliffe 2
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
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<div class="comments-wrapper">
			<h2 class="comments-title">
				<?php
					$comment_count = get_comments_number();
					if ( 1 === $comment_count ) {
						printf(
							/* translators: 1: title. */
							esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'radcliffe-2' ),
							'<span>' . get_the_title() . '</span>'
						);
					} else {
						printf( // WPCS: XSS OK.
							/* translators: 1: comment count number, 2: title. */
							esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'radcliffe-2' ) ),
							number_format_i18n( $comment_count ),
							'<span>' . get_the_title() . '</span>'
						);
					}
				?>
			</h2><!-- .comments-title -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'radcliffe-2' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( radcliffe_2_get_svg( array( 'icon' => 'previous' ) ) . esc_html__( 'Older Comments', 'radcliffe-2' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'radcliffe-2' ). radcliffe_2_get_svg( array( 'icon' => 'next' ) ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
			<?php endif; // Check for comment navigation. ?>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
						'callback'   => 'radcliffe_2_comment',
					) );
				?>
			</ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'radcliffe-2' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( radcliffe_2_get_svg( array( 'icon' => 'previous' ) ) . esc_html__( 'Older Comments', 'radcliffe-2' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'radcliffe-2' ). radcliffe_2_get_svg( array( 'icon' => 'next' ) ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.
		?>

		</div><!-- .comments-wrapper -->

	<?php
	endif; // Check for have_comments().
	?>
	<div class="respond">
		<div class="respond-wrapper">
			<?php
			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'radcliffe-2' ); ?></p>
			<?php endif; ?>

			<?php comment_form(); ?>
		</div>
	</div>
</div><!-- #comments -->
