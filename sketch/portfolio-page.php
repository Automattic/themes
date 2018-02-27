<?php
/**
 * Template Name: Portfolio Page Template
 *
 * @package Sketch
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( sketch_has_featured_posts( 1 ) ) : ?>
		    <div class="featured-content">
		        <?php get_template_part( 'content-featured' ); ?>
		    </div>
		<?php endif; ?>

		<?php if ( ! get_theme_mod( 'sketch_hide_portfolio_page_content' ) ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_title( '<header class="page-header"><h1 class="page-title">', '</h1></header>' ); ?>

				<div class="page-content">
					<?php
						the_content();
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sketch' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
					?>
					<?php edit_post_link( __( 'Edit', 'sketch' ), '<div class="entry-meta"><span class="edit-link">', '</span></div>' ); ?>

				</div><!-- .page-content -->

			<?php endwhile; // end of the loop. ?>
		<?php endif; ?>

			<?php
				if ( get_query_var( 'paged' ) ) :
					$paged = get_query_var( 'paged' );
				elseif ( get_query_var( 'page' ) ) :
					$paged = get_query_var( 'page' );
				else :
					$paged = 1;
				endif;

				$posts_per_page = get_option( 'jetpack_portfolio_posts_per_page', '9' );

				$args = array(
					'post_type'      => 'jetpack-portfolio',
					'paged'          => $paged,
					'posts_per_page' => $posts_per_page,
				);

				$project_query = new WP_Query ( $args );

				if ( $project_query -> have_posts() ) :
			?>

			<div class="projects clear">

			<?php
				while ( $project_query -> have_posts() ) : $project_query -> the_post();

					get_template_part( 'content', 'portfolio' );

				endwhile;
			?>

			</div><!-- .projects -->

			<?php
				sketch_paging_nav( $project_query->max_num_pages );
				wp_reset_postdata();
			?>

			<?php else : ?>

				<section class="no-results not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'No Project Found', 'sketch' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<?php if ( current_user_can( 'publish_posts' ) ) : ?>

							<p><?php printf( __( 'Ready to publish your first project? <a href="%1$s">Get started here</a>.', 'sketch' ), esc_url( admin_url( 'post-new.php?post_type=jetpack-portfolio' ) ) ); ?></p>

						<?php else : ?>

							<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sketch' ); ?></p>

						<?php endif; ?>
					</div><!-- .page-content -->
				</section><!-- .no-results -->

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>