<?php
	/**
 * @package Apostrophe 2
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( apostrophe_2_has_post_thumbnail() ) { ?>
		<figure class="entry-thumbnail apostrophe-2-thumb">
			<?php the_post_thumbnail( 'apostrophe-2-featured' ); ?>
		</figure>
	<?php } ?>

	<div class="entry-meta"><?php apostrophe_2_posted_on(); ?></div>
	<?php edit_post_link( esc_html__( 'Edit', 'apostrophe-2' ), '<span class="edit-link">', '</span>' ); ?>
	<h1 class="entry-title">
		<?php the_title(); ?>
	</h1>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'apostrophe-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php apostrophe_2_entry_footer(); ?>
		<?php the_post_navigation( array( 'next_text' => wp_kses( __( '<span class="meta-nav">Next</span> %title', 'apostrophe-2' ), array( 'span' => array( 'class' => array() ) ) ), 'prev_text' => wp_kses( __('<span class="meta-nav">Previous</span> %title', 'apostrophe-2' ), array( 'span' => array( 'class' => array() ) ) ) ) ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
