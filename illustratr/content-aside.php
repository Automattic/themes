<?php
/**
 * @package Illustratr
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'illustratr' ) );
				if ( $categories_list && illustratr_categorized_blog() ) :
			?>
				<span class="cat-links"><?php echo $categories_list; ?></span>
			<?php endif; ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<footer class="entry-meta">
		<?php illustratr_posted_on(); ?>

		<span class="entry-format"><a href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>" title="<?php echo esc_attr( sprintf( __( 'All %s posts', 'illustratr' ), get_post_format_string( 'aside' ) ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a></span>

		<?php
			/* translators: used between list items, there is a space after the comma */
			the_tags( sprintf( '<span class="tags-links">%s ', esc_html__( 'Tagged', 'illustratr' ) ), esc_html__( ', ', 'illustratr' ), '</span>' ); ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'illustratr' ), __( '1 Comment', 'illustratr' ), __( '% Comments', 'illustratr' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'illustratr' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
