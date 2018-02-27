<?php
/**
 * Template part for displaying posts.
 *
 * @package Libre 2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	<header class="entry-header">
		<?php $widont = remove_filter( 'the_title', 'widont' ); ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php if ( $widont ) add_filter( 'the_title', 'widont' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php libre_2_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( libre_2_has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'libre-2-post-thumbnail' ); ?></a>
			</div>
		<?php }
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'libre-2' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'libre-2' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php libre_2_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
