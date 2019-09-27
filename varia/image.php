<?php
/**
 * The template for displaying image attachments
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
				// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<nav id="image-navigation" class="navigation image-navigation responsive-max-width">
						<div class="nav-links">
							<div class="nav-previous"><?php previous_image_link( false, __( 'Previous Image', 'varia' ) ); ?></div>
							<div class="nav-next"><?php next_image_link( false, __( 'Next Image', 'varia' ) ); ?></div>
						</div><!-- .nav-links -->
					</nav><!-- .image-navigation -->

					<header class="entry-header responsive-max-width">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<figure class="entry-attachment wp-block-image">
						<?php
							/**
							 * Filter the default varia image attachment size.
							 *
							 * @since Twenty Sixteen 1.0
							 *
							 * @param string $image_size Image size. Default 'large'.
							 */
							$image_size = apply_filters( 'varia_attachment_size', 'full' );

							echo wp_get_attachment_image( get_the_ID(), $image_size );
						?>

							<figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>

						</figure><!-- .entry-attachment -->

						<?php
						the_content();
						wp_link_pages(
							array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'varia' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'varia' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							)
						);
						?>
					</div><!-- .entry-content -->

					<footer class="entry-footer responsive-max-width">
					<?php
						// Retrieve attachment metadata.
						$metadata = wp_get_attachment_metadata();
					if ( $metadata ) {
						printf(
							'<span class="full-size-link"><span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s &times; %4$s</a></span>',
							_x( 'Full size', 'Used before full size attachment link.', 'varia' ),
							esc_url( wp_get_attachment_url() ),
							absint( $metadata['width'] ),
							absint( $metadata['height'] )
						);
					}
					?>

						<?php varia_entry_footer(); ?>

					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

				<?php
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><br><span class="post-title">%title</span>', 'Parent post link', 'varia' ),
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				// End the loop.
				endwhile;
			?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
