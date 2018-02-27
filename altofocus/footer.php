<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AltoFocus
 */

?>

	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrap">
			<?php altofocus_social_menu(); ?>
			<?php get_template_part( 'components/footer/site', 'info' ); ?>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>

</body>
</html>
