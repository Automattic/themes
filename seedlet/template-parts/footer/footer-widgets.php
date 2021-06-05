<?php
/**
 * Displays the footer widget area
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<div class="widget-area">
		<div class="widget-column footer-widget-1">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div><!-- .widget-area -->

<?php endif; ?>
