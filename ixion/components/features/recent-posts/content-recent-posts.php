<?php
/**
 * Template part for displaying Recent Posts in the front page template
 *
 * @package Ixion
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
			get_template_part( 'components/post/content', 'meta' );

			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
	</header>

</article><!-- #post-## -->
