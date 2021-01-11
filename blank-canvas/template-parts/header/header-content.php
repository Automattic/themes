<?php
	$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
	$header_class = $show_title ? 'site-title' : 'screen-reader-text';
?>

<?php if ( ! is_singular() ) : ?>
	<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	</header><!-- #masthead -->
<?php endif; ?>
