<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Publication
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'publication' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'publication' ), 'WordPress' ); ?></a>
					<span class="genericon genericon-wordpress sep"></span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'publication' ), 'Publication', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
	</div><!-- #body-wrapper -->

<?php wp_footer(); ?>

</body>
</html>