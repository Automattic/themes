<?php
/**
 * The template for displaying image attachments.
 *
 * @package Libretto
 */

get_header();

/**
 * Set the content width if it hasn't already been determined
 */
if ( ! isset( $content_width ) ) {
	$content_width = 720; /* 680px wide plus a 40px buffer */
}

?>

<div id="primary" class="content-area image-attachment">
	<div id="content" class="site-content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php
				// We're going to use our custom "oversized" image size here
				$attachment_size = apply_filters( 'libretto_attachment_size', 'libretto-oversized' );
				$attachment_meta = wp_get_attachment_metadata( $post->ID );
				if ( $attachment_meta['width'] > 890 ) {
					$class = 'libretto-oversized';
				} else {
					$class = 'aligncenter';
				}
				// Output the actual image
				echo wp_get_attachment_image( get_the_ID(), $attachment_size, false, array( 'class' => $class ) );
				?>

				<?php if ( has_excerpt() ) : ?>
					<div class="entry-caption">
						<?php the_excerpt(); ?>
					</div><!-- .entry-caption -->
				<?php endif; ?>

				<?php // Add prev/next navigation. TODO: improve this so it matches with look & feel of navs in other places ?>
				<?php if ( $post->post_parent ) { ?>
				<nav id="nav-below" class="navigation-image" role="navigation">
					<div class="previous">
						<?php previous_image_link( false, '<span class="meta-nav">' . __( 'Previous image', 'libretto' ) . '</span>' ); ?>
					</div><!-- .previous -->
					<div class="next">
							<?php next_image_link( false, '<span class="meta-nav">' . __( 'Next image', 'libretto' ) . '</span>' ); ?>
					</div><!-- .next -->
				</nav><!-- .navigation-image -->
				<?php } ?>

				<?php
					the_content();
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'libretto' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'libretto' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'libretto' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</article><!-- #post-## -->

	<?php
		// If comments are open or we have at least one comment, load up the comment template
	if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;

	// End the loop.
	endwhile;
?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
