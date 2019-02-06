<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photos
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<?php photos_social_menu(); ?>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.com/', 'photos' ) ); ?>">
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'photos' ), 'Photos', '<a href="http://wordpress.com/themes/" rel="designer">Automattic</a>' );
					?>
				</a>
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
