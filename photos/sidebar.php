<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photos
 */

if (
	! is_active_sidebar( 'sidebar-1' ) &&
	! is_active_sidebar( 'sidebar-2' ) &&
	! is_active_sidebar( 'sidebar-3' )
) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<div class="container">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
</aside><!-- #secondary -->
