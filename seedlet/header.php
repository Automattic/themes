<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seedlet
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'seedlet' ); ?></a>

		<header id="masthead" class="site-header default-max-width" role="banner">
			<div class="menu-button-container">
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<button id="woo-open-menu" class="button open">
						<span class="dropdown-icon open"><?php echo seedlet_get_icon_svg( 'shopping_cart' ); ?> <?php _e( 'Cart', 'seedlet' ); ?></span>
						<span class="hide-visually expanded-text"><?php esc_html__( 'expanded', 'seedlet' ) ?></span>
					</button>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<button id="primary-open-menu" class="button open">
						<span class="dropdown-icon open"><?php _e( 'Menu', 'seedlet' ); ?> <?php echo seedlet_get_icon_svg( 'menu' ) ?></span>
						<span class="hide-visually expanded-text"><?php _e( 'expanded', 'seedlet' ); ?></span>
					</button>
				<?php endif; ?>
			</div>
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'seedlet' ); ?>">
					<button id="primary-close-menu" class="button close">
						<span class="dropdown-icon close"><?php _e( 'Close', 'seedlet' ); ?> <?php echo seedlet_get_icon_svg( 'close' ) ?></span>
						<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'seedlet' ); ?></span>
					</button>
					<?php
					// Get menu slug
					$location_name = 'primary';
					$locations = get_nav_menu_locations();
					$menu_id = $locations[ $location_name ];
					$menu_obj = wp_get_nav_menu_object( $menu_id );

					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container_class' => 'primary-menu-container',
							'items_wrap'      => '<ul id="%1$s" class="%2$s" role="navigation" aria-label="' . esc_attr__( 'submenu', 'seedlet' ) . '">%3$s</ul>',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
				<nav class="woo-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Woo Minicart', 'seedlet' ); ?>">
					<?php echo( sprintf(
						'<button id="woo-close-menu" class="button close">
							<span class="dropdown-icon close">%1$s %2$s</span>
							<span class="hide-visually collapsed-text">%3$s</span>
						</button>
						<div class="woocommerce-menu-container">
							<ul id="woocommerce-menu" class="menu-wrapper" role="navigation" aria-label="%4$s">
							<li class="menu-item woocommerce-menu-item %5$s" title="%6$s">
								%7$s
								<ul class="sub-menu">
									<li class="woocommerce-cart-widget" title="%8$s">
										%9$s
									</li>
								</ul>
							</li>',
						esc_html__( 'Cart', 'seedlet' ),
						seedlet_get_icon_svg( 'close' ),
						esc_html__( 'collapsed', 'seedlet' ),
						esc_attr__( 'submenu', 'seedlet' ),
						is_cart() ? 'current-menu-item' : '',
						esc_attr__( 'View your shopping cart', 'seedlet' ),
						seedlet_cart_link(),
						esc_attr__( 'View your shopping list', 'seedlet' ),
						seedlet_cart_widget()
					) ); ?>
				</nav><!-- .woo-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'seedlet' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . seedlet_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
