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

	<?php if ( class_exists( 'A8C\FSE\WP_Template' ) ) : // If the FSE plugin is active, use the Header template for content. ?>
	<footer class="fse-template-part fse-footer entry-content">
	<?php
		$template = new A8C\FSE\WP_Template();
		$template->output_template_content( A8C\FSE\WP_Template::FOOTER );
	else : // Otherwise we'll fallback to the default Varia footer below. ?>
	<footer id="colophon" class="site-footer responsive-max-width">
	<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );

		if ( has_nav_menu( 'menu-2' ) ) : ?>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'varia' ); ?>">
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
		<?php endif;
	endif; ?>

		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
			<?php endif; ?>
			<?php /* translators: 1: WordPress link, 2: WordPress. */
			printf( '<a href="%1$s" class="imprint">proudly powered by %2$s</a>.',
				esc_url( __( 'https://wordpress.org/', 'varia' ) ),
				'WordPress'
			); ?>
			<?php if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link();
			} ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
