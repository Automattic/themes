<?php
/**
 * Template part for displaying posts
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
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php radcliffe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>

	</header><!-- .entry-header -->
</article><!-- #post-<?php the_ID(); ?> -->
