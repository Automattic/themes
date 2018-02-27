<?php
	/**
 * @package Apostrophe 2
 *
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'apostrophe-2' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'apostrophe-2' ); ?></p>
					<?php get_search_form(); ?>

					<div class="apostrophe-2-widget-column">
						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						<div class="widget widget_categories">
							<h2 class="widgettitle"><?php esc_html_e( 'Most Used Categories', 'apostrophe-2' ); ?></h2>
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
					</div><!-- .apostrophe-2-widget-column -->

					<div class="apostrophe-2-widget-column">
						<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'apostrophe-2' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						?>

						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
					</div><!-- .apostrophe-2-widget-column -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
