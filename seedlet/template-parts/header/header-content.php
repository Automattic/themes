<?php
$has_primary_nav = has_nav_menu( 'primary' );
$header_classes  = 'site-header header_classes';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';
?>

<?php if ( ! ( true === get_theme_mod( 'hide_site_header', false ) && is_front_page() && is_page() ) ) : ?>
	<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
<?php endif; ?>
