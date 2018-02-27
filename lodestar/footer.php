<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lodestar
 */

?>

	</div>

	<?php get_template_part( 'components/footer/footer', 'image' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
			lodestar_social_menu();
			get_template_part( 'components/footer/footer', 'widgets' );
			get_template_part( 'components/footer/site', 'info' );
		?>
	</footer>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
