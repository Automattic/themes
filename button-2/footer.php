<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Button 2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) : ?>
			<div class="footer-widgets clear">
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
			</div><!-- .sidebar-widgets -->
		<?php endif; ?>
		<div class="site-info">
	<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'button-2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'button-2' ), 'WordPress' ); ?></a>
	<span class="sep"> &middot; </span>
	<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'button-2' ), 'Button 2', '<a href="http://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
