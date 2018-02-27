<?php
/**
 * Template part for displaying posts.
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

		<?php if ( 'post' == get_post_type() ) : ?>
			<?php button_2_entry_cats(); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php button_2_posted_on(); ?>
			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'button-2' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) ); ?>
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
		<?php button_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
