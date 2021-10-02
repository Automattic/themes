<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Blockbase
 * @since 1.1.1
 */
get_header();
?>
	<main class="container-404">
		<h1 class="has-text-align-center has-large-font-size"><?php _e( 'Oops! That page can&rsquo;t be found.', 'blockbase' ); ?></h1>

		<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blockbase' ); ?></p>

		<?php echo do_blocks('<!-- wp:search {"label":""} /-->'); ?>
	</main>
<?php
get_footer();
