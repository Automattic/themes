<?php
/**
 * @package Sketch
 */

$thumbsize = sketch_post_thumbnail_class();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail <?php echo $thumbsize; ?>">
		<a href="<?php the_permalink(); ?>">
			<span class="screen-reader-text"><?php the_title(); ?></span>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( $thumbsize ); ?>
			<?php endif; ?>
		</a>
		<?php edit_post_link( __( 'Edit', 'sketch' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->