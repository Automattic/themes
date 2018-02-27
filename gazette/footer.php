<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Gazette
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-inner">
			<?php
				$footer_content = get_theme_mod( 'gazette_footer_content' );
				if ( '' != $footer_content ) :
			?>
			<div class="footer-text">
				<?php echo wp_kses_post( $footer_content ); ?>
			</div><!-- .footer-text -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation">
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'social',
							'link_before'     => '<span class="screen-reader-text">',
							'link_after'      => '</span>',
							'depth'           => 1,
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'gazette' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'gazette' ), 'WordPress' ); ?></a>
				<span class="genericon genericon-wordpress sep"></span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'gazette' ), 'Gazette', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- .site-footer-inner -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
