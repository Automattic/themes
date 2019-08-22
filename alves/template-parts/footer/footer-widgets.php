<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2') || is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div id="footer-widgets">
<?php endif; ?>


	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer 1', 'alves' ); ?>">
			<?php
			if ( is_active_sidebar( 'sidebar-1' ) ) {
				dynamic_sidebar( 'sidebar-1' );
			}
			?>
		</aside><!-- .widget-area -->

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

		<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer 2', 'alves' ); ?>">
			<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) {
				dynamic_sidebar( 'sidebar-2' );
			}
			?>
		</aside><!-- .widget-area -->

	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>

		<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer 3', 'alves' ); ?>">
			<?php
			if ( is_active_sidebar( 'sidebar-3' ) ) {
				dynamic_sidebar( 'sidebar-3' );
			}
			?>
		</aside><!-- .widget-area -->

	<?php endif; ?>

<?php if ( is_active_sidebar( 'sidebar-1' ) || is_active_sidebar( 'sidebar-2') || is_active_sidebar( 'sidebar-3' ) ) : ?>
	</div>
<?php endif; ?>
