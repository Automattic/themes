<?php
/**
 * Template part for displaying single posts.
 *
 * @package Publication
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="hero">
			<div class="hentry-inner">
				<div class="entry-wrapper">
					<header class="entry-header">
						<div class="entry-meta">
							<?php publication_categories(); ?>
						</div><!-- .entry-meta -->

						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->
				</div><!-- .entry-wrapper -->
			</div><!-- .hentry-inner -->
		</div><!-- .hero -->
	<?php else : ?>
		<header class="entry-header">
			<div class="entry-meta">
				<?php publication_categories(); ?>
			</div><!-- .entry-meta -->

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'publication' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'publication' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-author">
		<?php get_template_part( 'template-parts/content', 'author' ); ?>
	</div><!-- .entry-author -->

	<footer class="entry-footer">
		<?php publication_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->