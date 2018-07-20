<?php
/**
 * Template part for displaying gallery posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scratchpad
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php scratchpad_sticky(); ?>

	<?php
		if ( get_post_gallery() && ! post_password_required() ) { ?>
			<div class="entry-gallery">
				<?php echo get_post_gallery(); ?>
				<div class="photo-corners">
					<?php
						get_template_part( 'images/inline', 'photo-corners.svg' );
						get_template_part( 'images/inline', 'photo-corners.svg' );
						get_template_part( 'images/inline', 'photo-corners.svg' );
						get_template_part( 'images/inline', 'photo-corners.svg' );
					?>
				</div><!-- .photo-corners -->
			</div><!-- .entry-gallery -->
		<?php
		} // endif get_post_gallery()
	?>

	<header class="entry-header">
		<?php if ( ! is_single() ) {
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		} ?>
	</header><!-- .entry-header -->

	<footer class="entry-meta">
		<?php scratchpad_post_format(); ?>
		<?php scratchpad_posted_on(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'scratchpad' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link"><span class="sep">&bull;</span>',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->

	<?php
	if ( post_password_required() ) {
		the_content();
	} ?>
</article><!-- #post-## -->
