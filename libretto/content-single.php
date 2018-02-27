<?php
/**
 * The template used for displaying individual post pages
 *
 * @package Libretto
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before'   => '<div class="page-links">'.__( 'Pages:', 'libretto' ),
			'pagelink' => '<span>%</span>',
			'after'    => '</div>',
		) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php libretto_entry_footer(); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
