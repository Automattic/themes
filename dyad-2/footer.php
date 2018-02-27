<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>

				<div class="widget-area <?php echo esc_attr( dyad_2_widget_column_class( 'sidebar-1' ) ); ?>" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- .grid-container -->
				</div><!-- #secondary -->

			<?php } ?>

			<div class="footer-bottom-info <?php if ( has_nav_menu( 'jetpack-social-menu' ) ) { echo 'has-social-menu'; } ?>">

				<?php // Social Menu
					dyad_2_social_menu(); ?>

				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'dyad-2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'dyad-2' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'dyad-2' ), 'Dyad 2', '<a href="http://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- .footer-bottom-info -->

		</footer><!-- #colophon -->

	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
