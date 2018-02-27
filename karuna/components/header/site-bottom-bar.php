<?php

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
} ?>

<div class="header-widget-area">
	<div class="header-widget-area-wrapper">
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</div><!-- .header-widget-area-wrapper -->
</div><!-- .header-widget-area -->