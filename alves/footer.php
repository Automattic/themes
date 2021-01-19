<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Alves
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
	<footer id="colophon" class="site-footer">
		<?php 
		if ( ! ( true === get_theme_mod( 'hide_site_footer', false ) && is_front_page() && is_page() ) ) : // If this is the homepage and the footer elements are set to hide, don't load this part.
			get_template_part( 'template-parts/footer/footer', 'widgets' ); 
		endif; ?>

		<div id="footer-info-wrapper">

		<?php
		if ( ! ( true === get_theme_mod( 'hide_site_footer', false ) && is_front_page() && is_page() ) ) : // If this is the homepage and the footer elements are set to hide, don't load this part.
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			get_template_part( 'template-parts/footer/footer', 'navigation' ); 
		endif;
		get_template_part( 'template-parts/footer/footer', 'info' ); ?>
		</div>
	<?php endif; ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
