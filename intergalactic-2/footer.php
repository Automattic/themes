<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Intergalactic 2
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( is_active_sidebar( 'sidebar-2' ) || is_active_sidebar( 'sidebar-3' ) || is_active_sidebar( 'sidebar-4' ) ) { ?>
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
				</div><!-- .widget-areas -->
			</div><!-- .sidebar-widgets -->
		<?php } ?>
		<div class="site-info">
			<a href="<?php echo esc_url( esc_html__( 'http://wordpress.org/', 'intergalactic-2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'intergalactic-2' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'intergalactic-2' ), 'Intergalactic 2', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
