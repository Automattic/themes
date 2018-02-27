<?php
/**
 * Displays footer widgets if assigned.
 *
 * @package Lodestar
 */
?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ||
	 is_active_sidebar( 'sidebar-4' ) ) {
	?>


	<aside class="widget-area" role="complementary">
		<div class="wrap">
			<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<div class="widget-column">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			<?php }
			if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
				<div class="widget-column">
					<?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
			<?php }
			if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
				<div class="widget-column">
					<?php dynamic_sidebar( 'sidebar-4' ); ?>
			<?php } ?>
		</div>
	</aside><!-- .widget-area -->

<?php } ?>
