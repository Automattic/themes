<?php
/**
 * The template for displaying Author info
 *
 * @package Seedlet
 */

if ( (bool) get_the_author_meta( 'description' ) ) : ?>
<div class="entry-author">

	<div class="author-heading">
		<h2 class="author-title">
			<?php esc_html_e( 'Published by', 'seedlet' ); ?>
			<span class="author-name">
				<?php
				printf(
					/* post author */
					esc_html( get_the_author() )
				);
				?>
			</span><!-- .author-name -->
		</h2>
	</div><!-- .author-heading -->

	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( esc_html__( 'View all posts by %s', 'seedlet' ), get_the_author() ); ?>
		</a>
	</p><!-- .author-bio -->
</div><!-- .entry-author -->
<?php endif; ?>
