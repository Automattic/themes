<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">

		<div class="entry-inner">

			<header class="entry-header">
				<h1><?php esc_html_e( 'Oops! That page can\'t be found.', 'dyad-2' ); ?></h1>

			</header><!-- .entry-header -->

			<div class="entry-content">

				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'dyad-2' ); ?></p>

				<?php get_search_form(); ?>

				<div class="error404-widgets">

					<?php the_widget( 'WP_Widget_Recent_Posts', 'number=10', 'before_title=<h2 class="widget-title">' ); ?>

					<?php if ( dyad_2_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'dyad-2' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>


				</div><!-- .error404-widgets -->

			</div><!-- .entry-content -->
		</div><!-- .entry-main -->

	</main><!-- #main -->

<?php get_footer(); ?>
