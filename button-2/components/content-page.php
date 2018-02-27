<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Button 2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<span class="corners">
					<?php the_post_thumbnail( 'button-2-featured' ); ?>
				</span>
				<a class="shadow" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="screen-reader-text"><?php the_title(); ?></span></a>
			</div>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">',
				'after'  => '</div>',
				'link_before' => '<span class="active-link">',
				'link_after' => '</span>'
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( function_exists( 'button_2_post_flair' ) ) : ?>
		<div class="entry-flair">
			<?php button_2_post_flair(); ?>
		</div><!-- .entry-flair -->
	<?php endif; ?>

	<footer class="entry-footer">
		<?php edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'button-2' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
