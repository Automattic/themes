<?php
/**
 * The sidebars containing the widget areas.
 *
 * @package Publication
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
// Rendering empty widget area container. The widgets are moved between this and sidebar-menu location with JavaScript.
?>

<div id="secondary" class="widget-area" role="complementary"></div><!-- #secondary -->