<?php
/**
 * The template for displaying search results pages.
 *
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">

		<header class="page-header">
			<h1 class="page-title">
				<?php printf( esc_html__( 'Search Results for: %s', 'dyad-2' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</header>

		<?php if ( have_posts() ) : ?>

			<div id="posts" class="posts">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blocks' );
					?>
				<?php endwhile; ?>

			</div><!-- .posts -->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<div id="posts" class="posts">
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</div>

		<?php endif; ?>

	</main><!-- #main -->

<?php get_footer(); ?>
