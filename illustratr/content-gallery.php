<?php
/**
 * @package Illustratr
 */

// Access global variable directly to adjust the content width for gallery post format
if ( isset( $GLOBALS['content_width'] ) ) {
	$GLOBALS['content_width'] = 1100;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( get_post_gallery() && ! post_password_required() ) : ?>
		<div class="entry-gallery">
			<?php echo get_post_gallery(); ?>
		</div><!-- .entry-gallery -->
	<?php endif; ?>

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			}
		?>

		<?php
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( __( ', ', 'illustratr' ) );
			if ( 'post' == get_post_type() && $categories_list && illustratr_categorized_blog() ) :
		?>
			<span class="cat-links"><?php echo $categories_list; ?></span>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'illustratr' ) ); ?>
		<?php
			wp_link_pages( array(
				'before'   => '<div class="page-links clear">',
				'after'    => '</div>',
				'pagelink' => '<span class="page-link">%</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php illustratr_posted_on(); ?>

		<span class="entry-format"><a href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'illustratr' ), get_post_format_string( 'gallery' ) ) ); ?>"><?php echo get_post_format_string( 'gallery' ); ?></a></span>

		<?php
			/* translators: used between list items, there is a space after the comma */
			the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'illustratr' ) ), esc_html__( ', ', 'illustratr' ), '</span>' ); ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'illustratr' ), __( '1 Comment', 'illustratr' ), __( '% Comments', 'illustratr' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'illustratr' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
