<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Independent_Publisher_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php independent_publisher_2_entry_header(); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() || wp_link_pages( array( 'echo' => false ) ) ) : ?>
		<div class="entry-footer">
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'independent-publisher-2' ),
					'after'  => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );

				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'independent-publisher-2' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="post-edit-link">',
					'</span>'
				);
			?>
		</div><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
