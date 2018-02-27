<?php
/**
 * @package Intergalactic 2
 */

$header = get_header_image();
?>
<?php if ( intergalactic_2_has_post_thumbnail() ) {
	$thumbnail = intergalactic_2_get_attachment_image_src( $post->ID, get_post_thumbnail_id( $post->ID ), 'intergalactic-large' ); ?>
	<div class="entry-background" style="background-image:url(<?php echo esc_url( $thumbnail ); ?>)">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>

<?php } elseif ( ! empty ( $header ) ) { ?>
	<div class="entry-background" style="background-image:url(<?php echo esc_url( $header ); ?>)">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
<?php } else { ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content-wrapper">
		<div class="entry-meta">
			<?php intergalactic_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'intergalactic-2' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( esc_html__( ', ', 'intergalactic-2' ) );

				/* translators: used between list items, there is a space after the comma */
				the_tags( sprintf( '<span class="entry-tags"><span class="heading">%s</span> ', esc_html__( 'Tags:', 'intergalactic-2' ) ), esc_html__( ', ', 'intergalactic-2' ), '</span>' );

				if ( 'true' == intergalactic_2_categorized_blog() ) {
					printf( '<span class="entry-categories">' . __( '<span class="heading">Categories:</span> %1$s', 'intergalactic-2' ) . '</span>', $category_list );
				}
			?>

			<?php edit_post_link( esc_html__( 'Edit', 'intergalactic-2' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	</div><!-- .entry-content-wrapper -->
</article><!-- #post-## -->
