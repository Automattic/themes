<?php
/**
 * The static front page template
 *
 * @package AltoFocus
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( get_page_template_slug( get_the_ID() ) ) { ?>

					<?php get_template_part( 'components/page/content', 'page-portfolio' ); ?>

				<?php } else { ?>

					<?php get_template_part( 'components/page/content', 'page' ); ?>

				<?php } ?>

			<?php endwhile; ?>

			<?php get_template_part( 'components/features/portfolio/portfolio' ); ?>

		</main>
	</div>

<?php get_footer(); ?>

<?php endif; ?>
