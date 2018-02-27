<?php
/**
 * The template used for displaying Jetpack Portfolio posts on single portfolio pages
 *
 * @package Lodestar
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'lodestar-portfolio-featured-image' ); ?>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		} ?>
		<div class="entry-meta">
			<?php lodestar_portfolio_meta(); ?>
		</div><!-- .entry-meta -->

	</header>

	<div class="entry-content">
		<?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lodestar' ),
			'after'  => '</div>',
		) );

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lodestar_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php lodestar_author_bio(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
