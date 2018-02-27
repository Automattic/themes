<?php
/**
 * The template for displaying the Portfolio archive page.
 *
 * @package Rebalance
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php rebalance_portfolio_thumbnail( '<div class="entry-image">', '</div>' ) ?>

			<header class="page-header">
				<?php
					rebalance_portfolio_title( '<h1 class="page-title">', '</h1>' );
					rebalance_portfolio_content( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div id="infinite-wrap">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'card' );
					?>

				<?php endwhile; ?>

				<?php
					the_posts_navigation( array(
						'prev_text'          => esc_html__( 'Older projects', 'rebalance' ),
						'next_text'          => esc_html__( 'Newer projects', 'rebalance' ),
						'screen_reader_text' => esc_html__( 'Portfolio navigation', 'rebalance' ),
					) );
				?>

			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
