<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

?>

<section class="no-results not-found">
	<header class="page-header responsive-max-width">
		<h1 class="page-title"><?php _e( 'No Posts Found', 'varia' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content responsive-max-width">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			?>

			<p>
			<?php _e( "Your site is set to show the most recent posts on this page - but you don't have any Posts published.", 'varia' ); ?></p>

			<p>
				<a href="<?php echo esc_url( admin_url( 'edit.php' ) ); ?>" class="button">
					<?php
					/* translators: 1: link to WP admin new post page. */
					_e( 'Add or publish Posts', 'varia' );
					?>
				</a>
			</p>	
			
			<?php
		elseif ( is_search() ) :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'varia' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'varia' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
