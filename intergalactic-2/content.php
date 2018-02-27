<?php
/**
 * @package Intergalactic 2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( intergalactic_2_has_post_thumbnail() ) {
		$thumbnail = intergalactic_2_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'intergalactic-large' ); ?>
		<div class="entry-background" style="background-image:url(<?php echo esc_url( $thumbnail ); ?>)"></div>
	<?php } ?>
	<header class="entry-header">
		<?php if ( is_sticky() ) {
			echo '<span class="sticky-flag">' . esc_html__( 'Featured', 'intergalactic-2' ) . '</span>';
		} ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php edit_post_link( esc_html__( 'Edit', 'intergalactic-2' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</footer>
</article><!-- #post-## -->
