<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TextBook
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php textbook_breadcrumbs(); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'textbook' ),
				'after'  => '</div>',
			) ); ?>
	</div>
	<footer class="entry-footer">
		<?php // Edit link
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'textbook' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			); ?>
	</footer>
</article><!-- #post-## -->