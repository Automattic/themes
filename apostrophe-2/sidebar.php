<?php
	/**
 * @package Apostrophe 2
 *
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="secondary" class="widget-area" role="complementary">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="sidebar-primary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="sidebar-secondary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="sidebar-tertiary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div><!-- #secondary -->
