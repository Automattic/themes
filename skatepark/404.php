<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Skatepark
 * @since 1.1.1
 */
get_header();
?>
	<main class="container-404">
		<h2 class="wp-block-post-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'skatepark' ); ?></h1>

		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'skatepark' ); ?></p>

		<?php echo do_blocks('<!-- wp:search {"label":""} /-->'); ?>
	</main>
<?php
get_footer();
