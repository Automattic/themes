<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
	<div class="footer-widgets clear">
		<div class="widget-areas">
			<?php if ( is_active_sidebar( 'footer-1' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>

			<?php if ( is_active_sidebar( 'footer-2' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>

			<?php if ( is_active_sidebar( 'footer-3' ) ): ?>
				<div class="widget-area">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div><!-- .widget-area -->
			<?php endif; //is_active_sidebar ?>
		</div><!-- .widget-areas -->
	</div><!-- .footer-widgets -->
<?php endif; ?>
