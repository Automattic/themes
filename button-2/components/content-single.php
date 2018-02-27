<?php
/**
 * Template part for displaying single posts.
 *
 * @package Button 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( button_2_has_post_thumbnail() ) : ?>
			<div class="featured-image">
				<span class="corners">
					<?php the_post_thumbnail( 'button-2-featured' ); ?>
				</span>
				<a class="shadow" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="screen-reader-text"><?php the_title(); ?></span></a>
			</div>
		<?php endif; ?>

		<?php button_2_entry_cats(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php button_2_posted_on(); ?>
		</div>
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

	<?php button_2_author_bio(); ?>

	<?php if ( function_exists( 'button_2_post_flair' ) ) : ?>
		<div class="entry-flair">
			<?php button_2_post_flair(); ?>
		</div><!-- .entry-flair -->
	<?php endif; ?>

	<footer class="entry-footer">
		<?php button_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
