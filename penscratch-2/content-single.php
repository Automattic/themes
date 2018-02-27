<?php
/**
 * @package Penscratch 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( penscratch_2_has_post_thumbnail() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail( 'penscratch-2-featured' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry-meta">
			<?php penscratch_2_posted_on(); ?>
			<?php edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'penscratch-2' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link"><span class="sep"> ~ </span>',
				'</span>'
			); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'penscratch-2' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'penscratch-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'penscratch-2' ) );
			if ( $categories_list && penscratch_2_categorized_blog() ) :
		?>
		<span class="cat-links">
			<?php printf( esc_html__( 'Posted in %1$s', 'penscratch-2' ), $categories_list ); ?>
		</span>
		<?php endif; // End if categories ?>
		<?php
			$tags_list = get_the_tag_list( '', '' );
			if ( $tags_list && ! is_wp_error( $tags_list ) ) :
		?>
			<span class="tags-links">
				<?php echo $tags_list; ?>
			</span>
		<?php endif; // End if $tags_list ?>
	</footer><!-- .entry-footer -->

	<?php penscratch_2_author_bio(); ?>
</article><!-- #post-## -->
