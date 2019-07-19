<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage _Dsgnsystm
 * @since 1.0.0
 */

if ( (bool) get_the_author_meta( 'description' ) ) : ?>
<div class="author-bio responsive-max-width">
	<h2 class="author-title">
		<span class="author-heading">
			<?php
			printf(
				/* translators: %s: post author */
				__( 'Published by %s', '_dsgnsystm' ),
				esc_html( get_the_author() )
			);
			?>
		</span>
	</h2>
	<p class="author-description">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php _e( 'View more posts', '_dsgnsystm' ); ?>
		</a>
	</p><!-- .author-description -->
</div><!-- .author-bio -->
<?php endif; ?>
