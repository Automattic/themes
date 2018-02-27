<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TextBook
 */

?>

	</div>

	<?php // Get Footer Sidebar
		get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-footer-wrap">

			<?php get_template_part( 'components/navigation/navigation', 'bottom' ); ?>

			<?php get_template_part( 'components/footer/site', 'info' ); ?>

		</div><!-- .site-footer-wrap -->

	</footer><!-- .site-footer -->

</div>
<?php wp_footer(); ?>

</body>
</html>
