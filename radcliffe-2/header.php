<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Radcliffe 2
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'radcliffe-2' ); ?></a>

	<header id="masthead" class="site-header">
		<?php radcliffe_2_contact_info( 'header' ); ?>

		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div><!-- #header-image -->
		<?php endif; ?>

		<div class="header-wrapper">
			<div class="site-branding">
				<?php the_custom_logo(); ?>

				<div class="site-branding-text">
					<?php
					if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding-text -->

			</div><!-- .site-branding -->

		</div><!-- .header-wrapper -->

		<div class="menu-wrapper">
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="header-menu" aria-expanded="false">
						<?php
							echo radcliffe_2_get_svg( array( 'icon' => 'menu' ) );
							echo radcliffe_2_get_svg( array( 'icon' => 'close' ) );
							esc_html_e( 'Menu', 'radcliffe-2' );
						?>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'header-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php // Add Woocommerce Cart to header if Woocommerce exists
				if ( class_exists( 'WooCommerce' ) ) {
					radcliffe_2_woocommerce_header_cart();
				} ?>

			<?php radcliffe_2_social_menu(); ?>
		</div><!-- .menu-wrapper -->
	</header><!-- #masthead -->

	<?php radcliffe_2_hero_area(); ?>

	<div id="content" class="site-content">
