<?php
/**
 * This "sidebar" for widgets actually appears just above the site footer.
 *
 * @package Libretto
 */

$active_sidebars = libretto_get_active_sidebars();

// No sidebars? No content!
if ( 0 === count( $active_sidebars )  ) {
	return;
}
?>

<section id="footer-sidebar" class="clear widget-area" role="complementary">
	<?php // Otherwise, let's loop through every activated sidebar, and put it in a div
	foreach ( $active_sidebars as $sidebar_name ) :
		echo '<div id="'. esc_attr( $sidebar_name ) .'" class="widget-block">';
		dynamic_sidebar( esc_attr( $sidebar_name ) );
		echo '</div>';
	endforeach;
	?>
</section><!-- #secondary -->
