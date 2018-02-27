<?php
/**
 * Template part for displaying pages on front page.
 *
 * @package Lodestar
 */

global $lodestarcounter;

$current_panel_layout = 'lodestar_panel' . $lodestarcounter . '_layout';
$panel_layout = get_theme_mod( $current_panel_layout, 'one-column' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'lodestar-panel ' . esc_attr( $panel_layout ) ); ?> >

	<span class="panel lodestar-panel<?php echo esc_attr( $lodestarcounter ); ?>" id="panel<?php echo esc_attr( $lodestarcounter ); ?>">
		<span class="lodestar-panel-title"><?php printf( esc_html__( 'Panel %1$s', 'lodestar' ), esc_attr( $lodestarcounter ) ); ?></span>
	</span>

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lodestar-featured-image' );

		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lodestar-featured-image' );
		//Calculate aspect ratio: h / w * 100%
		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div>

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php lodestar_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lodestar' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>
			</div><!-- .entry-content -->

			<?php
			// Show portfolio projects
			if ( 'templates/portfolio-page.php' === get_page_template_slug() ) :
				// show 6 latest portfolio projects
				$args = array(
					'post_type'      => 'jetpack-portfolio',
					'posts_per_page' => 6,
					'no_found_rows'  => true,
				);

				$project_query = new WP_Query ( $args );
				?>

				<?php if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) : ?>

					<div class="portfolio-projects">

						<?php
						while ( $project_query -> have_posts() ) : $project_query -> the_post();
							get_template_part( 'components/features/portfolio/content', 'portfolio' );
						endwhile;
						?>

					</div><!-- .portfolio-projects -->

				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			<?php
			// Show testimpnials
			elseif ( 'templates/testimonial-page.php' === get_page_template_slug() ) : ?>

				<?php
				// Show two random testimonials
				$args = array(
					'orderby'        => 'rand',
					'post_type'      => 'jetpack-testimonial',
					'posts_per_page' => 2,
					'no_found_rows'  => true,
				);

				$testimonial_query = new WP_Query ( $args );
				?>

				<?php if ( post_type_exists( 'jetpack-testimonial' ) && $testimonial_query -> have_posts() ) : ?>

					<div class="testimonials">

						<?php
						while ( $testimonial_query -> have_posts() ) : $testimonial_query -> the_post();
							get_template_part( 'components/features/testimonials/content', 'testimonials' );
						endwhile;
						?>

					</div><!-- .testimonials -->

				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			<?php
			// Show recent blog posts
			// (Note that get_option returns a string, so we're casting the result as an int).
			elseif ( get_the_ID() === (int) get_option( 'page_for_posts' )  ) : ?>

				<?php // Show four most recent posts.
				$args = array(
					'posts_per_page'      => 2,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
				);

				$recent_posts = new WP_Query ( $args );
				?>

		 		<?php if ( $recent_posts->have_posts() ) : ?>
					<div class="recent-posts">
						<?php
						while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
							get_template_part( 'components/post/content', 'excerpt' );
						endwhile;
						?>
					</div><!-- .recent-posts -->
				<?php endif; ?>

				<?php wp_reset_postdata(); ?>

			<?php endif; ?>

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
