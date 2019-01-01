<?php
/**
 * @package Sara
 */

$featured = dara_get_featured_posts();

if ( empty( $featured ) )
	return;
?>

<div id="featured-content" class="flexslider hero">
	<div class="flex-viewport-wrapper hero-content">
		<div class="featured-posts slides" id="featured-slides">
		<?php
			foreach ( $featured as $post ) :
				setup_postdata( $post ); ?>
				<div class="hero-content-wrapper">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php if ( dara_has_post_thumbnail() ) { ?>
							<?php the_post_thumbnail( 'dara-hero-thumbnail' ); ?>
						<?php } else { ?>
							<div class="thumbnail-placeholder"></div>
						<?php } ?>
					</a>
					<div class="featured-post">
						<?php
						if ( 'post' === get_post_type() ) {
							$categories_list = get_the_category_list( ' ' );
							if ( $categories_list && dara_categorized_blog() ) {
								printf( '<span class="cat-links">%1$s</span>', $categories_list );
							}
						} ?>
						<?php if ( '' !== get_the_title( $post->ID ) ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="entry-title">', '</h2>' ); ?></a>
						<?php endif; ?>
						<?php get_template_part( 'components/post/content', 'meta' ); ?>
					</div><!-- .featured-post -->
				</div>
		<?php
			endforeach;
			wp_reset_postdata(); ?>
		</div><!-- .slides -->
	</div><!-- .hero-content -->
</div><!-- .hero -->
