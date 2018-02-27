<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TextBook
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div class="footer-widget-area">
	<aside id="footer-widgets" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside>
</div>