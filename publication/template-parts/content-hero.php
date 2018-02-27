<?php
/**
 * The template part for displaying the first post in index view.
 *
 * @package Publication
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">
		<div class="entry-wrapper">
			<header class="entry-header">
				<div class="entry-meta">
					<?php publication_categories(); ?>
				</div><!-- .entry-meta -->

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
		</div><!-- .entry-wrapper -->
	</div><!-- .hentry-inner -->
</article><!-- #post-## -->