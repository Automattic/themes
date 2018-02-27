<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Independent_Publisher_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php independent_publisher_2_entry_header(); ?>
	<?php independent_publisher_2_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php
			if ( in_array( get_post_format(), array( 'aside', 'quote', 'status' ) ) ) :
				if ( 'status' === get_post_format() ) {
					printf( '<a class="status-avatar" href="%s">%s</a>',
						esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) ),
						get_avatar( get_the_author_meta( 'email' ), 100 )
					);
				}

				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'independent-publisher-2' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			else :
				the_excerpt();
			endif;
		?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php independent_publisher_2_entry_meta(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
