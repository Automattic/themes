<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebalance
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php rebalance_entry_meta(); ?>
		</div><!-- .entry-meta -->

		<?php the_post_navigation( array(
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'rebalance' ) . '</span>',
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'rebalance' ) . '</span>'
			)); ?>
	</header><!-- .entry-header -->

	<?php if ( rebalance_has_post_thumbnail() ) { ?>
	<div class="post-hero-image clear-fix">
		<figure class="entry-image">
			<?php the_post_thumbnail( 'full' ); ?>
		</figure>
	</div><!-- .post-hero-image -->
	<?php } ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rebalance' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php rebalance_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<?php
	/**
	 * Display the post navigation
	 */
	the_post_navigation( array(
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'rebalance' ) . '</span> <span class="meta-nav-title">%title</span>',
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'rebalance' ) . '</span> <span class="meta-nav-title">%title</span> '
	));

	/**
	 * Display the author meta
	 */
	rebalance_author_bio(); ?>
