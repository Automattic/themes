<?php
/**
 * The template for displaying the footer.
 *
 * @package Libretto
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'libretto' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s.', 'libretto' ), 'WordPress' ); ?></a>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'libretto' ), 'Libretto', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
			</div><!-- .site-info -->

			<?php
			// Prepare social media nav
			if ( has_nav_menu( 'social' ) ) : ?>
				<div id="social">
					<?php wp_nav_menu( array(
						'theme_location' => 'social',
					 	'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					 	'fallback_cb'    => false,
					 	'depth'          => 1,
					) );
				 	?>
				</div><!-- #social -->
			<?php endif; ?>

		</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>
