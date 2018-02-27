<?php
//Return if there are no sidebars in the footer area
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) && ! is_active_sidebar( 'sidebar-6' ) && ! is_active_sidebar( 'sidebar-7' ) ) {
	return;
} ?>

<div class="footer-widgets">
	<div class="footer-widgets-wrapper">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-6' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-7' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>
	</div><!-- .footer-widgets-wrapper -->
</div><!-- .footer-widgets -->