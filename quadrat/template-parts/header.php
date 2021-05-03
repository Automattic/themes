<?php
/**
 * Displays the header.
 * Needed until we have a consistent mechanism to render a navigation between FSE and classic menus.
 *
 * @package Quadrat
 * @since 1.0.0
 *
 */

require get_stylesheet_directory() . '/inc/render-navigation-block.php';
?>

<?php
	echo do_blocks(
		'<!-- wp:group {"className":"site-header","style":{"spacing":{"padding":{"right":"35px","left":"35px"}}}} --><div class="wp-block-group site-header" style="padding-right:35px;padding-left:35px">
		<!-- wp:site-title /-->' .
		render_navigation_block( 'primary' ) .
		'</div><!-- /wp:group -->'
	);

