		<div class="entry-meta">
			<?php ixion_post_meta(); ?>
			<?php edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'ixion' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			); ?>
		</div><!-- .entry-meta -->
