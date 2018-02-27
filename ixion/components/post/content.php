<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ixion
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-body">
		<header class="entry-header">
			<?php
				if ( has_post_thumbnail() && ! is_single() ) : ?>

				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'ixion-featured-image' ); ?>
					</a>
				</div>

			<?php
				endif;

				if ( ! is_single() ) {
					if ( 'post' === get_post_type() ) {
						get_template_part( 'components/post/content', 'meta' );
					}
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
			?>
		</header>
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ixion' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ixion' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php if ( is_single() ) {
			get_template_part( 'components/post/content', 'footer' );
		} ?>

		<?php if ( 'post' === get_post_type() ) {
			ixion_author_bio();
		} ?>
	</div> <!-- .entry-body -->
</article><!-- #post-## -->
