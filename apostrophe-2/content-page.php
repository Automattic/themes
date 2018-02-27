<?php
	/**
 * @package Apostrophe 2
 *
 * The template used for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="entry-thumbnail apostrophe-2-thumb">
			<?php the_post_thumbnail( 'apostrophe-2-featured' ); ?>
		</figure>
	<?php } ?>

	<?php edit_post_link( esc_html__( 'Edit', 'apostrophe-2' ), '<span class="edit-link">', '</span>' ); ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'apostrophe-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
