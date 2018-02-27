<?php
/**
 * Template Name: Grid Page
 *
 * @package Dara
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'components/page/content', 'hero' ); ?>

	<?php endwhile; ?>

	<?php rewind_posts(); ?>

	<div class="content-wrapper full-width <?php echo esc_attr( dara_additional_class() ); ?>">
		<div id="primary" class="content-area grid-page-content-area ">
			<div id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'components/page/content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php
					$dara_child_pages = new WP_Query( array(
						'post_type'      => 'page',
						'orderby'        => 'menu_order',
						'order'          => 'ASC',
						'post_parent'    => $post->ID,
						'posts_per_page' => 999,
						'no_found_rows'  => true,
					) );
				?>

				<?php if ( $dara_child_pages->have_posts() ) : ?>

				<div class="child-pages grid">

						<?php
						while ( $dara_child_pages->have_posts() ) : $dara_child_pages->the_post();

							get_template_part( 'components/post/content', 'grid' );

						endwhile;
						?>

				</div><!-- .child-pages .grid -->

				<?php
					endif;
					wp_reset_postdata();
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- .content-wrapper -->

<?php get_footer(); ?>
