<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Toujours
 */

?>
		</div><!-- .wrap -->
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer' ) ) { ?>
		<div id="footer-widgets" class="<?php echo esc_attr( toujours_widget_column_class( 'footer' ) ); ?>" role="complementary">
			<div class="wrap">
				<div class="grid-layout">
					<?php dynamic_sidebar( 'footer' ); ?>
				</div>
			</div><!-- .wrap -->
		</div><!-- #footer-widgets -->
	<?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<?php toujours_social_menu(); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'toujours' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'toujours' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'toujours' ), 'Toujours', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
