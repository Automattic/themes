<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Button 2
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! has_nav_menu( 'jetpack-social-menu' ) ) {
 return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php button_2_social_menu(); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
