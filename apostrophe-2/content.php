<?php
	/**
 * @package Apostrophe 2
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/*
	* If our posts have featured images, we'll show them in the grid.
	* Otherwise, we'll fall back to a grey box with an icon representing the post format.
	*/
	if ( apostrophe_2_has_post_thumbnail() ) {
		$apostrophe_2_post_thumbnail = get_the_post_thumbnail();
		$apostrophe_2_has_thumbnail = 'apostrophe-2-thumb';
	} else {
		$apostrophe_2_post_thumbnail = '<span></span>';
		$apostrophe_2_has_thumbnail = 'apostrophe-2-nothumb';
	} // check for post thumbnail
	?>

	<a class="entry-thumbnail <?php echo esc_attr( $apostrophe_2_has_thumbnail ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
		<?php echo wp_kses_post( $apostrophe_2_post_thumbnail ); ?>
	</a>
	<header class="entry-header">
		<div class="entry-meta">
			<?php apostrophe_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header><!-- .entry-header -->

</article><!-- #post-## -->
