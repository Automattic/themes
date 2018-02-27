<?php
	/**
 * @package Apostrophe 2
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="widget-area">
			<div id="footer-sidebar">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'apostrophe-2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'apostrophe-2' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'apostrophe-2' ), 'Apostrophe 2', '<a href="http://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
