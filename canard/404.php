<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Canard
 */

get_header(); ?>

	<div class="site-content-inner">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html__( 'Oops! That page can&rsquo;t be found.', 'canard' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'canard' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- .site-content-inner -->

<?php get_footer(); ?>