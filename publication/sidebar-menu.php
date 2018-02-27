<?php
/**
 * The sidebars containing the widget areas on small screens.
 *
 * @package Publication
 */

if ( ! is_active_sidebar( 'sidebar-1' ) && ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="tertiary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="sidebar-1" class="widget-column">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-column -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="sidebar-2" class="widget-column sidebar-2">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-column -->
	<?php endif; ?>
</div><!-- #tertiary -->