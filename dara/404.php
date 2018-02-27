<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dara
 */

get_header(); ?>

	<div class="content-wrapper without-featured-image">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'dara' ); ?></h1>
					</header>
					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'dara' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</section>
			</main><!-- .site-main -->
		</div><!-- .content-area -->
		<?php get_sidebar(); ?>
	</div><!-- .content-wrapper -->
<?php
get_footer();
