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
		'<!-- wp:group {"tagName":"header","className":"site-header"} -->
		<header class="wp-block-group site-header"><!-- wp:site-logo /--><!-- wp:site-title /-->' .
		render_navigation_block( 'primary' ) .
		'</header><!-- /wp:group -->'
	);
?>