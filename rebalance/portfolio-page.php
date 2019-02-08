<?php
/**
 * Template Name: Portfolio Page
 *
 * This page template displays a feautred project section followed by a collection of projects thumbnails.
 * If no featutred projects exists, only a collection of projects thumbnails is displayed.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rebalance
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php
			/*
			 * Include the Featured Project loop.
			 * - if featured posts exist, collect their IDs and exclude them from the main loop
			 */
			if ( rebalance_has_featured_projects( 1 ) ) {
				$featured_ids = rebalance_get_featured_project_ids();
				get_template_part( 'template-parts/section', 'featured' );
			} else {
				$featured_ids = null;
			} ?>

		<main id="main" class="site-main" role="main">

			<?php // Set Up New Query
				if ( get_query_var( 'paged' ) ) :
					$paged = get_query_var( 'paged' );
				elseif ( get_query_var( 'page' ) ) :
					$paged = get_query_var( 'page' );
				else :
					$paged = 1;
				endif;

				$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '10' );

				$temp = null;
				$project_query = $temp;
				$project_query = new WP_Query();
				$project_query->query( array(
					'post_type'    => 'jetpack-portfolio',
					'paged'        => $paged,
					'posts_per_page' => $posts_per_page,
					'post__not_in' => $featured_ids
				) ); ?>

			<?php if ( $project_query->have_posts() ) : ?>

				<div id="infinite-wrap">

					<?php /* Start the Loop */ ?>
					<?php while ( $project_query->have_posts() ) : $project_query->the_post(); ?>

						<?php
							/*
							 * Include the Card template for the project content.
							 */
							get_template_part( 'template-parts/content', 'card' );
						?>

					<?php endwhile; ?>

				</div>

				<?php rebalance_paging_nav( $project_query->max_num_pages ); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<?php // Empty queries
				$project_query = $temp;
				$temp = null; ?>

			<?php // Reset posts so our normal loop isn't affected
				wp_reset_postdata(); ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
