<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

?>

<?php if ( 'jetpack-testimonial' == get_post_type() ) : ?>

	<article class="hentry search-testimonial">
		<div class="hentry-wrapper">
			<?php get_template_part( 'template-parts/content', 'testimonial' ); ?>
		</div><!-- .hentry-wrapper -->
	</article><!-- .hentry -->

<?php else : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="hentry-wrapper">
			<header class="entry-header" <?php shoreditch_background_image(); ?>>
				<div class="entry-header-wrapper">
					<?php
					shoreditch_entry_meta();

					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
				</div><!-- .entry-header-wrapper -->
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php shoreditch_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div><!-- .hentry-wrapper -->
	</article><!-- #post-## -->

<?php endif; ?>
