<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Seedlet
 * @since 1.0.0
 */

?>

<section class="no-results not-found">
	<header class="page-header default-max-width">
		<h1 class="page-title"><?php _e( 'No posts published yet!', 'seedlet' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content default-max-width">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
			<?php _e( "Your site is set to show the the most recent posts on your homepage - but you don't have any Posts published.", 'seedlet' ); ?></p>

			<p>
				<a href="<?php  echo esc_url( admin_url( 'edit.php' ) ); ?>" class="button">
			<?php /* translators: 1: link to WP admin new post page. */
			 _e( 'Add or publish Posts', 'seedlet' ); ?>
				</a>
			</p>

		<?php elseif ( is_search() ) :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'seedlet' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'seedlet' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
