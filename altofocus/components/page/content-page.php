<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AltoFocus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php // Edit link
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'altofocus' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<div class="entry-meta"><span class="edit-link">',
				'</span></div>'
			);
		?>
	</header>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'altofocus' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article><!-- #post-## -->