<?php declare( strict_types = 1 ); ?>
<?php
$has_primary_nav = has_nav_menu( 'menu-1' );
$header_classes  = 'site-header responsive-max-width';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= 1 === get_theme_mod( 'header_text', 1 ) ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
	<?php get_template_part( 'template-parts/header/site', 'navigation' ); ?>
</header><!-- #masthead -->
