<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Affinity
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_single() && affinity_has_post_thumbnail() ) : ?>
		<div class="featured-image">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				<?php the_post_thumbnail(); ?>
			</a>
		</div><!-- .featured-image -->
	<?php endif; ?>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header>

	<?php if ( has_excerpt() && ( is_single() || ! affinity_content_options_show_excerpt() ) ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	<?php endif; ?>

	<?php if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part( 'components/post/content', 'meta' ); ?>
	<?php endif; ?>

	<div class="entry-content">

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'affinity' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'affinity' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<?php if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part( 'components/post/content', 'footer' ); ?>
	<?php endif; ?>

</article><!-- #post-## -->
