<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header responsive-max-width">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', '_dsgnsystm' ) );
		}
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<?php _dsgnsystm_post_thumbnail(); ?>

	<div class="entry-content responsive-max-width">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_dsgnsystm' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_dsgnsystm' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer responsive-max-width">
		<?php _dsgnsystm_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
