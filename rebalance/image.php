<?php
/**
 * The template that shows an attachment image
 *
 * @package Rebalance
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php if ( get_the_title() ) : ?>
						<h1 class="entry-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></h1>
					<?php endif; ?>
					<div class="entry-meta">
						<?php
							$published_text = '<span class="attachment-meta"><time class="entry-date" datetime="%1$s">%2$s</time></span> <span class="parent-entry"><a href="%3$s" title="'. esc_attr__( 'Return to %4$s', 'rebalance' ) . '" rel="gallery">' . esc_html__( 'Return to: %5$s', 'rebalance' ) . '</a></span>';
							$post_title = get_the_title( $post->post_parent );
							if ( empty( $post_title ) || 0 == $post->post_parent )
								$published_text = '<span class="attachment-meta"><time class="entry-date" datetime="%1$s">%2$s</time></span>';

							printf( $published_text,
								esc_attr( get_the_date('c') ),
								esc_html( get_the_date() ),
								esc_url( get_permalink( $post->post_parent ) ),
								esc_attr( strip_tags( $post_title ) ),
								$post_title
							);

							$metadata = wp_get_attachment_metadata();
							printf( '<span class="attachment-meta full-size-link post-comments"><a href="%1$s" title="%2$s">%3$s (%4$s &times; %5$s)</a></span>',
								esc_url( wp_get_attachment_url() ),
								esc_attr__( 'Link to full-size image', 'rebalance' ),
								esc_html__( 'Full resolution', 'rebalance' ),
								$metadata['width'],
								$metadata['height']
							);

							edit_post_link( esc_html__( 'Edit', 'rebalance' ), '<span class="edit-link">', '</span>');

						?>
					</div> <!-- /post-meta -->

					<?php if ( $post->post_parent ) { ?>
						<nav class="navigation image-navigation post-navigation" role="navigation">
							<h2 class="screen-reader-text">Image navigation</h2>
							<div class="nav-links">
								<?php // If Previous image exists, show a link
									ob_start();
									previous_image_link();
									$previous_link = ob_get_contents();
									ob_end_clean();
									if ( $previous_link != '' ) { ?>
								<div class="nav-previous"><?php previous_image_link( false, '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous Image', 'rebalance' ) . '</span>' ); ?></div>
								<?php } ?>
								<?php // If Next image exists, show a link
									ob_start();
									next_image_link();
									$next_link = ob_get_contents();
									ob_end_clean();
									if ( $next_link != '' ) { ?>
								<div class="nav-next"><?php next_image_link( false, '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next Image', 'rebalance' ) . '</span>' ); ?></div>
								<?php } ?>
							</div><!-- .nav-links -->
						</nav><!-- .image-navigation -->
					<?php } ?>

				</header> <!-- /entry-header -->

				<div class="post-hero-image clear-fix">
					<figure class="entry-image">
						<?php rebalance_the_attached_image(); ?>
						<?php if ( has_excerpt() ) : ?>
							<figcaption class="entry-image-caption"><span class="fa fw fa-camera"></span><?php echo get_the_excerpt(); ?></figcaption>
						<?php endif; ?>
					</figure>
				</div><!-- .post-hero-image -->

				<div class="entry-content">
					<?php
						$attachment = get_post( get_the_ID() ); // Get post by ID
						$attachment_content = $attachment->post_content;
						$attachment_content = apply_filters( 'the_content', $attachment_content );
						echo $attachment_content; ?>
				</div><!-- .entry-content -->

			</article> <!-- /post -->

			<?php // End the loop.
				endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
