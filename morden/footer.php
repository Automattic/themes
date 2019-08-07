<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer responsive-max-width">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>

    <div class="footer-wrapper">
  		<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
  			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'morden' ); ?>">
  				<?php
  				wp_nav_menu(
  					array(
  						'theme_location' => 'menu-2',
  						'menu_class'     => 'footer-menu',
  						'depth'          => 1,
  					)
  				);
  				?>
  			</nav><!-- .footer-navigation -->
  		<?php endif; ?>
  		<div class="site-info">
  			<?php $blog_info = get_bloginfo( 'name' ); ?>
  			<?php if ( ! empty( $blog_info ) ) : ?>
  				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
  			<?php endif; ?>
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'morden' ) ); ?>" class="imprint">
  				<?php
  				/* translators: %s: WordPress. */
  				printf( __( 'proudly powered by %s.', 'morden' ), 'WordPress' );
  				?>
  			</a>
  		</div><!-- .site-info -->
    </div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
