<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AltoFocus
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<?php if ( have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

		<main id="main" class="site-main" role="main">

		<?php
			// Get the featured post ids
			$feautured_id_array = altofocus_get_featured_post_ids();

			/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'components/post/content', get_post_format() );

			endwhile;

			the_posts_navigation();
		?>

		</main>

	<?php else : ?>

		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'components/post/content', 'none' ); ?>

		</main>

	<?php endif; ?>

	</div>
<?php
get_sidebar();
get_footer();
