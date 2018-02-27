<?php
/**
 * The template part for displaying Featured Content via Jetpack featured-content settings
 *
 * Learn more: http://jetpack.me/support/featured-content/
 *
 * @package Rebalance
 */

// Set Up Featured Posts
$featured = rebalance_get_featured_projects();

// No posts, so return
if ( empty( $featured ) )
	return;
?>

	<?php foreach ( $featured as $post ) : setup_postdata( $post ); ?>
		<section id="feature" class="site-feature clear-fix">

			<?php $thumbclass = ( rebalance_has_post_thumbnail() ? 'has-thumbnail' : '' ); ?>
			<article id="post-<?php the_ID(); ?>" class="hentry featured-project <?php echo $thumbclass; ?>">

				<?php if ( rebalance_has_post_thumbnail() ) { ?>
				<div class="post-hero-image">
					<figure class="entry-image">
						<a href="<?php the_permalink() ?>" class="entry-image-link">
							<?php the_post_thumbnail( 'full' ); ?>
						</a>
					</figure>
				</div><!-- .post-hero-image -->
				<?php } ?>

				<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
					<div class="entry-meta">
						<?php rebalance_entry_footer(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->

			</article><!-- #post-## -->
		</section>

	<?php endforeach; ?>

<?php // Reset posts so our normal loop isn't affected
	wp_reset_postdata(); ?>
