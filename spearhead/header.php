<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Spearhead
 * @since 1.0.0
 */
$has_primary_nav = has_nav_menu( 'primary' );
$header_classes  = 'site-header header_classes';
$header_classes .= has_custom_logo() ? ' has-logo' : '';
$header_classes .= true === get_theme_mod( 'display_title_and_tagline', true ) ? ' has-title-and-tagline' : '';
$header_classes .= $has_primary_nav ? ' has-menu' : '';
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
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'spearhead' ); ?></a>

		<header id="masthead" class="<?php echo $header_classes; ?>" role="banner">
			<?php get_template_part( 'template-parts/header/site-branding' ); ?>

			<?php if ( $has_primary_nav || has_nav_menu( 'social' ) ) : ?>
				<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main', 'spearhead' ); ?>">
					<button id="primary-close-menu" class="button close">
						<span class="dropdown-icon close"><?php _e( 'Close', 'spearhead' ); ?> <?php echo seedlet_get_icon_svg( 'close' ); ?></span>
						<span class="hide-visually collapsed-text"><?php _e( 'collapsed', 'spearhead' ); ?></span>
					</button>
					<div class="extra-navigation-wrapper">
						<?php
						if ( $has_primary_nav ) :
							// Get menu slug
							$location_name = 'primary';
							$locations     = get_nav_menu_locations();
							$menu_id       = $locations[ $location_name ];
							$menu_obj      = wp_get_nav_menu_object( $menu_id );

							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'menu_class'      => 'menu-wrapper',
									'container_class' => 'primary-menu-container',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								)
							);
						endif;
						if ( has_nav_menu( 'social' ) ) :
							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>' . seedlet_get_icon_svg( 'link' ),
									'container_class' => 'social-navigation',
									'depth'           => 1,
								)
							);
						endif;
						?>
					</div><!-- .extra-navigation-wrapper -->
				</nav><!-- #site-navigation -->
			<?php endif; ?>

			<div class="menu-button-container">
				<?php if ( $has_primary_nav ) : ?>
					<button id="primary-open-menu" class="button open">
						<span class="dropdown-icon open"><?php _e( 'Menu', 'spearhead' ); ?> <?php echo seedlet_get_icon_svg( 'menu' ); ?></span>
						<span class="hide-visually expanded-text"><?php _e( 'expanded', 'spearhead' ); ?></span>
					</button>
				<?php endif; ?>
			</div>

			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
				<nav class="woo-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Woo Minicart', 'spearhead' ); ?>">
					<?php
					echo( sprintf(
						'<button id="woo-close-menu" class="button close">
							<span class="dropdown-icon close">%1$s %2$s</span>
							<span class="hide-visually collapsed-text">%3$s</span>
						</button>
						<div class="woocommerce-menu-container">
							<ul id="woocommerce-menu" class="menu-wrapper"">
							<li class="menu-item woocommerce-menu-item %4$s" title="%5$s">
								%6$s
								<ul class="sub-menu">
									<li class="woocommerce-cart-widget" title="%7$s">
										%8$s
									</li>
								</ul>
							</li>',
						esc_html__( 'Close', 'spearhead' ),
						seedlet_get_icon_svg( 'close' ),
						esc_html__( 'collapsed', 'spearhead' ),
						is_cart() ? 'current-menu-item' : '',
						esc_attr__( 'View your shopping cart', 'spearhead' ),
						spearhead_cart_link(),
						esc_attr__( 'View your shopping list', 'spearhead' ),
						spearhead_cart_widget()
					) );
					?>
				</nav><!-- .woo-navigation -->
			<?php endif; ?>

			<div class="menu-button-container">
				<?php if ( class_exists( 'WooCommerce' ) ) : ?>
					<button id="woo-open-menu" class="button open">
						<span class="dropdown-icon open"><?php echo seedlet_get_icon_svg( 'shopping_cart' ); ?> <?php _e( 'Cart', 'spearhead' ); ?></span>
						<span class="hide-visually expanded-text"><?php esc_html__( 'expanded', 'spearhead' ); ?></span>
					</button>
				<?php endif; ?>
			</div>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
