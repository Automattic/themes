<?php
/**
 * Template part for displaying attachment content in attachment.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-wrapper">
		<?php the_title( '<header class="entry-header"><div class="entry-header-wrapper"><h1 class="entry-title">', '</h1></div></header>' ); ?>

		<div class="entry-content">
			<?php
				// Use a the large image size
				$image_size = apply_filters( 'shoreditch_attachment_size', 'large' );
				if ( wp_get_attachment_image( get_the_ID() ) ) {
					echo '<p>' . wp_get_attachment_image( get_the_ID(), $image_size ) . '</p>';
				}
			?>

			<?php
				if ( has_excerpt() ) {
					the_excerpt();
				}
			?>

			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'shoreditch' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>
	</div><!-- .hentry-wrapper -->
</article><!-- #post-## -->
