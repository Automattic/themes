<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Independent_Publisher_2
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || is_404() ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
