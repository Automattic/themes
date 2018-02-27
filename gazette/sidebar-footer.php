<?php
/**
 * The Sidebar containing the footer widget area.
 *
 * @package Gazette
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="tertiary" class="footer-widget" role="complementary">
	<div class="footer-widget-inner">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- .wrapper -->
</div><!-- #tertiary -->
