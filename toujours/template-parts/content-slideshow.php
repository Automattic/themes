<?php
/**
 * Template part for displaying slideshow in header
 *
 * @package Toujours
 */

$featured_posts = toujours_get_banner_posts(); ?>

<div id="featured-slideshow">
	<div class="wrap">
		<div class="slideshow">
			<ul class="slides">
				<?php foreach ( (array) $featured_posts as $order => $post ) {
					setup_postdata( $post ); ?>
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'toujours-banner' ); ?>
					<li class="slide">
						<div class="slide-media" title="<?php the_title_attribute(); ?>" <?php if ( has_post_thumbnail() ) { echo 'style="background-image: url(' . esc_url( $thumb[0] ) . ');"'; } ?>>
						</div>
						<div class="slide-info">
							<?php the_title( sprintf( '<div class="slide-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>
							<?php toujours_posted_on(); ?>
						</div>
					</li><!-- .slide -->
				<?php } ?>
			</ul><!-- .slides -->
		</div><!-- .slideshow -->
	</div><!-- .wrap -->
</div><!-- #featured-slideshow -->

<?php wp_reset_postdata(); ?>
