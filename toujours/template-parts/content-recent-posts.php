<?php
/**
 * Template part for displaying trio of recent posts
 *
 * @package Toujours
 */

$latest_three = apply_filters( 'toujours-recent-posts', false );
if ( ! $latest_three ) {
	return;
}
?>

<div id="featured-post-trio" class="clear">
	<div class="wrap">

		<?php
			$recent_posts = new WP_Query( array(
				'post__in'             => (array) $latest_three,
				'ignore_sticky_posts'  => 1,
				'posts_per_page'	   => '3',
			) );
			while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
		?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail() ) { ?>

					<?php if ( has_post_thumbnail() ) { ?>
						<div class="featured-image">
							<span>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'toujours-trio' ); ?></a>
							</span>
						</div>
					<?php } ?>

				<?php } ?>

				<div class="entry-text">
					<header class="entry-header">
						<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

						<div class="entry-meta">
							<?php toujours_posted_on(); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php toujours_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</div><!-- .entry-text -->
			</article><!-- #post-## -->


		<?php
		endwhile;
		wp_reset_postdata();
		?>

	</div><!-- .wrap -->
</div><!--/. featured posts -->
