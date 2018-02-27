<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Intergalactic 2
 */

$header = get_header_image();
?>

<?php if ( has_post_thumbnail() ) {
	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'intergalactic-large' ); ?>
	<div class="entry-background" style="background-image:url(<?php echo esc_url( $thumbnail[0] ); ?>)">
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
		<?php edit_post_link( esc_html__( 'Edit', 'intergalactic-2' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
	</div><!-- .entry-content-wrapper -->
</article><!-- #post-## -->
