<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Apostrophe 2
 */

get_header(); ?>

	<section id="primary" class="content-area">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );

					if ( is_author() && '' !== get_the_author_meta( 'description' ) ) {
						echo '<div class="taxonomy-description">' . get_the_author_meta( 'description' ) . '</div><!-- .taxonomy-description -->';
					} else {
						the_archive_description( '<div class="taxonomy-description">', '</div><!-- .taxonomy-description -->' );
					}
				?>
		</header><!-- .page-header -->

		<main id="main" class="site-main" role="main">

			<div id="posts-wrapper">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<div><!-- #posts-wrapper -->

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

		<?php the_posts_navigation(); ?>

	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
