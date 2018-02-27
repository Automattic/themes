<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Independent_Publisher_2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'independent-publisher-2' ); ?></a>

	<div id="hero-header" class="site-hero-section">
		<header id="masthead" class="site-header" role="banner">
			<div class="inner">
				<div class="site-branding">
					<?php the_custom_logo(); ?>

					<?php if ( '' !== get_theme_mod( 'independent_publisher_2_gravatar_email', get_option( 'admin_email' ) ) ) : ?>
						<a class="site-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img alt="" class="site-logo-image no-grav" width="80" height="80" src="<?php echo esc_url( get_avatar_url( get_theme_mod( 'independent_publisher_2_gravatar_email', get_option( 'admin_email' ) ), array( 'size' => 160 ) ) ); ?>" />
						</a><!-- .site-logo-link -->
						<?php endif;

						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php independent_publisher_2_social_menu(); ?>

				<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" id="primary-menu-button">
						<?php esc_html_e( 'Menu', 'independent-publisher-2' ); ?>
					</button><!-- .menu-toggle -->
				<?php endif; ?>

			</div><!-- .inner -->
		</header><!-- #masthead -->
	</div>

	<?php if ( function_exists( 'ip_woocommerce_header_cart' ) ) : ?>
	<div id="menu-with-cart">
	<?php endif; ?>
	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>

	<?php if ( function_exists( 'ip_woocommerce_header_cart' ) ) : ?>
		<nav id="wc-navigation" class="main-navigation" role="navigation">
			<?php ip_woocommerce_header_cart(); ?>
		</nav>
	<?php endif; ?>

	<?php if ( function_exists( 'ip_woocommerce_header_cart' ) ) : ?>
	</div>
	<?php endif; ?>

	<div id="content-wrapper" class="content-wrapper">
		<div id="content" class="site-content">
