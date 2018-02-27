<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' ) ) : ?>
	<div class="footer-widgets clear">
		<div class="widget-areas">
			<?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>

			<?php if ( is_active_sidebar( 'sidebar-3' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>

			<?php if ( is_active_sidebar( 'sidebar-4' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>

			<?php if ( is_active_sidebar( 'sidebar-5' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>
		</div><!-- .widget-areas -->
	</div><!-- .footer-widgets -->
<?php endif; ?>
