<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Libretto
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php the_content( __( 'read more', 'libretto' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">'.__( 'Pages:', 'libretto' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'libretto' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
