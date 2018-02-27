<?php
/**
 * The sidebar containing the footer page widget areas.
 *
 * If no active widgets in any of the sidebars, they will be hidden completely.
 *
 * @package Pique
 */

if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
	<div id="tertiary" class="widget-area footer-widget-area" role="complementary">
		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		    <div id="widget-area-2" class="widget-area">
		        <?php dynamic_sidebar( 'sidebar-2' ); ?>
		    </div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		    <div id="widget-area-3" class="widget-area">
		        <?php dynamic_sidebar( 'sidebar-3' ); ?>
		    </div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		    <div id="widget-area-4" class="widget-area">
		        <?php dynamic_sidebar( 'sidebar-4' ); ?>
		    </div>
		<?php endif; ?>
	</div><!-- #tertiary -->
<?php endif; ?>
