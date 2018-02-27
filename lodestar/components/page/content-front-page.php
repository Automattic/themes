<article id="post-<?php the_ID(); ?>" <?php post_class( 'lodestar-intro' ); ?> >

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'lodestar' ),
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>'
			) );
		?>
	</div>
	<?php lodestar_edit_link( get_the_ID() ); ?>
</article><!-- #post-## -->
