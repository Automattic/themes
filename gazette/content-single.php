<?php
/**
 * @package Gazette
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( gazette_has_post_thumbnail() && ( ! has_post_format() || has_post_format( 'aside' ) || has_post_format( 'image' ) || has_post_format( 'gallery' ) ) ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'gazette-single-thumbnail' ); ?>
			</div>
		<?php endif; ?>

		<?php if ( ! has_post_format( 'aside' ) ) : ?>
			<div class="entry-meta">
				<?php gazette_entry_meta(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'gazette' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'gazette' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gazette_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
