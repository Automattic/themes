<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package Ixion
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a class="post-link" href="<?php the_permalink(); ?>"><span class="screen-reader-text"><?php the_title(); ?></span></a>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'ixion-featured-content' ); ?>
		</div>
	<?php } ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h1>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
