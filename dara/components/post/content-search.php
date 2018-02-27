<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dara
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && 'post' !== get_post_type() ||
			   dara_has_post_thumbnail() && 'post' === get_post_type() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'dara-featured-image' ); ?>
			</a>
		</div>
	<?php endif; ?>
	<header class="entry-header">
		<?php
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( ', ' );
			if ( $categories_list && dara_categorized_blog() ) {
				printf( '<span class="cat-links">%1$s</span>', $categories_list );
			}
		}

		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	<div class="entry-body">
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php get_template_part( 'components/post/content', 'meta' ); ?>
		<?php endif; ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<?php get_template_part( 'components/post/content', 'footer' ); ?>
	</div>
</article>
