<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radcliffe 2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( radcliffe_2_has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail" <?php radcliffe_2_background_image(); ?>></div>
	<?php endif; ?>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php radcliffe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
