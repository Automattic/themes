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

<header class="site-header" role="banner">
	<?php
	echo do_blocks(
		'<!-- wp:group --><div class="wp-block-group">
		<!-- wp:site-logo /-->
		<!-- wp:site-title /-->' .
		render_navigation_block( 'primary' ) .
		'</div><!-- /wp:group -->'
	);
	?>
</header>