<?php
/**
 * The template for displaying Author Bio
 *
 * @package Gazette
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'gazette_author_bio_avatar_size', 60 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-heading">
		<h2 class="author-title"><?php _e( 'Published by', 'gazette' ); ?></h2>
		<h3 class="author-name"><?php echo get_the_author(); ?></h3>
	</div><!-- .author-heading -->

	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( __( 'View all posts by %s', 'gazette' ), get_the_author() ); ?>
		</a>
	</p><!-- .author-bio -->
</div><!-- .author-info -->
