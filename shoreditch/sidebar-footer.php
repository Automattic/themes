<?php
/**
 * The sidebar containing the footer widget area.
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

$footer_top_column = get_theme_mod( 'shoreditch_footer_top_column', 'column-1' );
$footer_bottom_column = get_theme_mod( 'shoreditch_footer_bottom_column', 'column-3' );
?>

<aside id="tertiary" class="widget-area widget-footer" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="widget-footer-area widget-footer-top-area <?php echo $footer_top_column; ?>">
		<div class="widget-area-wrapper">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area-wrapper-area -->
	</div><!-- .widget-footer-full-width -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-footer-area widget-footer-bottom-area <?php echo $footer_bottom_column; ?>">
		<div class="widget-area-wrapper">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area-wrapper -->
	</div><!-- .widget-footer-area -->
	<?php endif; ?>
</aside><!-- #tertiary -->
