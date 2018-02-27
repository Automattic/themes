<?php
/**
 * The Template for displaying all single Eventbrite events.
 */

get_header(); ?>

	<div class="site-content-wrapper">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			<?php
				// Get our event based on the ID passed by query variable.
				$event = new Eventbrite_Query( array( 'p' => get_query_var( 'eventbrite_id' ) ) );

				if ( $event->have_posts() ) :
					while ( $event->have_posts() ) : $event->the_post(); ?>

						<article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="entry-thumbnail">
									<?php the_post_thumbnail(); ?>
								</div><!-- .entry-thumbnail -->
							<?php endif; ?>

							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>

								<div class="entry-meta">
									<?php eventbrite_event_meta(); ?>
								</div><!-- .entry-meta -->
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>

								<?php eventbrite_ticket_form_widget(); ?>
							</div><!-- .entry-content -->

							<footer class="entry-meta">
								<?php eventbrite_edit_post_link( __( 'Edit', 'shoreditch' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</article><!-- #post-## -->

					<?php endwhile;

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content', 'none' );

				endif;

				// Return $post to its rightful owner.
				wp_reset_postdata();
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

</div><!-- .site-content-wrapper -->
<?php get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
