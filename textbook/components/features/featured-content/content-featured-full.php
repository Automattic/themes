<?php
/**
 * The template for displaying featured content on the front page in full width
 *
 * @package TextBook
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( 'post' === get_post_type() ) : ?>
		<?php get_template_part( 'components/post/content', 'meta' ); ?>
	<?php else : ?>
	<div class="entry-meta">
		<span class="featured-page-meta"><?php esc_html_e( 'Featured', 'textbook' ); ?></span>
	</div>
	<?php endif; ?>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<figure class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'textbook-featured-content-image-full' ); ?>
			</a>
		</figure>
	<?php endif; ?>
	<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
	<div class="entry-content entry-summary">
		<?php
			$content = get_the_content();
			$content = strip_shortcodes( $content );
			$content = wp_trim_words( $content, '20' );
			echo apply_filters( 'the_content', $content );?>
	</div>
</article>
