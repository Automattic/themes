<?php
/**
 * The template used for displaying Jetpack Portfolio posts on single portfolio pages
 *
 * @package Lodestar
 */
?>

<?php
// Add post ID plus formatting as class for filtering
$portfolio_data = lodestar_portfolio_data();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $portfolio_data ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php
			$project_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lodestar-portfolio-archive-image' );
			$alt_text = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true );

			if ( is_page_template( 'templates/portfolio-page.php' ) ) : ?>

				<img data-original="<?php echo esc_url( $project_image[0] ); ?>" width="900" height="600" class="portfolio-featured-image" alt="<?php echo esc_attr( $alt_text ); ?>" title="<?php the_title_attribute(); ?>">

			<?php else : ?>
				<img src="<?php echo esc_url( $project_image[0] ); ?>" width="900" height="600" class="portfolio-featured-image" alt="<?php echo esc_attr( $alt_text ); ?>" title="<?php the_title_attribute(); ?>">


			<?php endif; ?>
		</div><!-- .post-thumbnail -->

	<?php endif; ?>

	<div class="project-archive-content">
		<div class="project-archive-content-wrapper">

			<header class="entry-header">
				<?php if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				} ?>
			</header>
			<div class="entry-meta">
				<?php lodestar_portfolio_meta(); ?>
			</div><!-- .entry-meta -->

			<footer class="entry-footer">
				<?php lodestar_edit_post_link(); ?>
			</footer><!-- .entry-footer -->

		</div><!-- .project-archive-content-wrap -->
	</div><!-- .project-archive-content -->

</article><!-- #post-<?php the_ID(); ?> -->
