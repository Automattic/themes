<?php
/**
 * Template part for displaying posts with the image format.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scratchpad
 */


/* translators: %s: Name of current post */
$content_text = sprintf(
	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'scratchpad' ), array( 'span' => array( 'class' => array() ) ) ),
	the_title( '<span class="screen-reader-text">"', '"</span>', false )
);
$content = apply_filters( 'the_content', get_the_content( $content_text ) );
$image = get_media_embedded_in_content( $content, array( 'image' ) );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php scratchpad_sticky(); ?>

	<?php if ( has_post_thumbnail() ) { ?>
		<div class="featured-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'scratchpad-featured' ); ?></a>
			<div class="photo-corners">
				<?php
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
				?>
			</div><!-- .photo-corners -->
		</div><!-- .featured-image -->

	<?php } else if ( ! empty( $image ) ) { ?>
		<div class="featured-image">
			<a href="<?php the_permalink(); ?>"><?php echo $image[0]; ?></a>
			<div class="photo-corners">
				<?php
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
					get_template_part( 'images/inline', 'photo-corners.svg' );
				?>
			</div><!-- .photo-corners -->
		</div><!-- .featured-image -->
	<?php } ?>

	<header class="entry-header">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<div class="entry-meta">
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
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
</article><!-- #post-## -->
