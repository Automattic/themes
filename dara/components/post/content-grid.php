<?php
/**
 * The template used for displaying featured page content in front-page.php
 *
 * @package Dara
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_title( sprintf( '<header class="entry-header"><h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2></header>' ); ?>

    <?php if ( has_post_thumbnail() ) { ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <?php } ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</article><!-- #post-## -->
