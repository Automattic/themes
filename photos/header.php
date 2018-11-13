<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'photos' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php endif; ?>

				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$photos_description = get_bloginfo( 'description', 'display' );
				if ( $photos_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $photos_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php
						echo photos_get_svg( array( 'icon' => 'menu', 'title' => esc_html__( 'Open Menu', 'photos' ) ) );  // WPCS: XSS OK.
						echo photos_get_svg( array( 'icon' => 'close-alt', 'title' => esc_html__( 'Close Menu', 'photos' ) ) ); // WPCS: XSS OK.
					?>
					<span>
					<?php
						esc_html_e( 'Menu', 'photos' );
					?>
					</span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'depth'			 => 4,
				) );
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<?php if ( get_header_image() ) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_header_image_tag(); ?></a>
			</div><!-- .header-image -->
		<?php endif; ?>
