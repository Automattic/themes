<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dyad
 */

?>

<article class="no-results not-found">

	<div class="entry-inner">
		<div class="entry-inner-content">
			<header class="entry-header">
				<h2><?php esc_html_e( 'Nothing Found', 'dyad-2' ); ?></h2>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dyad-2' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dyad-2' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dyad-2' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
			</div><!-- .entry-content -->
		</div><!-- .entry-inner-content -->
	</div><!-- .entry-inner -->

	<a class="cover-link" href="<?php the_permalink(); ?>"></a>

</article><!-- .no-results not-found -->
