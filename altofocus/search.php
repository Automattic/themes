<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AltoFocus
 */

get_header(); ?>

	<div id="primary" class="content-area">

	<?php
		if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'altofocus' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'components/post/content', get_post_format() );

			endwhile;

			the_posts_navigation(); ?>

		</main>

		<?php else : ?>

		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'components/post/content', 'none' ); ?>

		</main>

		<?php endif; ?>

	</div>
<?php
get_footer();
