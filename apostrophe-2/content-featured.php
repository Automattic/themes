<?php
/**
 * The template for displaying featured content
 *
 * @package Canard
 */
$featured_posts = apostrophe_2_get_featured_posts();
if ( empty( $featured_posts ) ) {
	return;
}
?>

<div id="featured-content" class="featured-content">
	<?php
		$count = 1;

		foreach ( $featured_posts as $post ) {
			setup_postdata( $post );
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'apostrophe-2-featured' ); ?>>
				<?php
				if ( apostrophe_2_has_post_thumbnail() ) {

					$apostrophe_2_has_thumbnail = 'apostrophe-2-thumb';
					// The grid of featured content posts uses smaller image size for items 2,3,6,7,10,11 etc.
					if ( ( ( ( $count - 2 ) / 4) * 10 ) % 10 == 0 || ( ( ( $count - 3 ) / 4) * 10 ) % 10 == 0 ) {
						$thumbnail = get_the_post_thumbnail( $post->ID );
					} else {
						$thumbnail = get_the_post_thumbnail( $post->ID, 'apostrophe-2-featured' );
					}

				} else {

					$apostrophe_2_has_thumbnail = 'apostrophe-2-nothumb';
					$thumbnail = '<span></span>';

				} ?>

				<a class="entry-thumbnail <?php echo esc_attr( $apostrophe_2_has_thumbnail ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
					<?php echo wp_kses_post( $thumbnail ); ?>
				</a>
			  	<header class="entry-header">
					<div class="entry-meta">
						<?php apostrophe_2_posted_on(); ?>
					</div><!-- .entry-meta -->
					<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header><!-- .entry-header -->

			</article><!-- #post-## -->

		<?php
		$count++;
		}
		wp_reset_postdata();
	?>
</div><!-- #featured-content -->
