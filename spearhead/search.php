<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Spearhead
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php get_search_form(); ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header default-max-width">
						<?php
						if ( is_sticky() && is_home() && ! is_paged() ) {
							printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'spearhead' ) );
						}
						the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						?>
					</header><!-- .entry-header -->

					<footer class="entry-footer default-max-width">
						<?php seedlet_entry_meta_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-${ID} -->


				<?php
				// End the loop.
			endwhile;

			// Previous/next page navigation.
			seedlet_the_post_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content-none' );

		endif;
		?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
