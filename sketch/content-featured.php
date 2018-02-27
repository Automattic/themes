<?php
/**
 * @package Sketch
 */

$featured = sketch_get_featured_posts();

if ( empty( $featured ) )
	return;
?>

<div id="featured-content" class="flexslider">
	<div class="flex-viewport-wrapper">
		<ul class="featured-posts slides" id="featured-slides">
		<?php
			foreach ( $featured as $post ) :
				setup_postdata( $post ); ?>

			<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<span class="entry-thumbnail">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'sketch-featured' ); ?>
						<?php endif; ?>
					</span>
				</a>
				<header class="entry-header">
					<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

					<div class="entry-meta">
						<?php sketch_posted_on(); ?>
						<?php edit_post_link( __( 'Edit', 'sketch' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			</li><!-- #post-## -->
		<?php
			endforeach;
			wp_reset_postdata(); ?>
		</ul>
	</div>
</div>