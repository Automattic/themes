<?php
/**
 * The template part for displaying an Author biography
 *
 * @package Scratchpad
 */
?>

<div class="author-info clear">
	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 ); ?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h2 class="author-title">
			<span class="author-heading"><?php esc_html_e( 'Author:', 'scratchpad' ); ?></span>
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a>
		</h2>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php esc_html_e( 'View All Posts', 'scratchpad' ); ?>
				<?php //printf( esc_html__( 'View all posts by %s', 'scratchpad' ), get_the_author() ); ?>
			</a>
		</p><!-- .author-bio -->
	</div><!-- .author-description -->
</div><!-- .author-info -->
