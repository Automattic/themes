<?php
$show_title = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$has_primary_nav = has_nav_menu( 'primary' );
$header_classes  = 'site-header header_classes';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= $show_title ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';
?>

<?php if ( true === get_theme_mod( 'show_site_header', false ) ) : ?>
	<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
<?php elseif ( ! is_singular() ) : ?>
	<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	</header><!-- #masthead -->
<?php endif; ?>
