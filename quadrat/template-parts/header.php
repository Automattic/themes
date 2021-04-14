<?php
/**
 * Displays the header. 
 * Needed until we have a consistent mechanism to render a navigation between FSE and classic menus.
 * 
 * @package Quadrat
 * @since 1.0.0
 * 
 */
$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$has_primary_nav       = has_nav_menu( 'primary' );
$has_primary_nav_items = wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'fallback_cb'    => false,
		'echo'           => false,
	)
);
?>

<header id="masthead" class="site-header" role="banner">
	<div class="site-branding">
		<?php if ( has_custom_logo() ) : ?>
			<div class="site-logo"><?php the_custom_logo(); ?></div>
		<?php endif; ?>
		<?php if ( ! empty( $blog_info ) ) : ?>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $blog_info; ?></a></p>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( $description ) : ?>
			<p class="site-description">
				<?php echo $description; ?>
			</p>
		<?php endif; ?>
	</div><!-- .site-branding -->
	
	<?php if ( $has_primary_nav && $has_primary_nav_items ) : ?>
		<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main', 'quadrat' ); ?>">
			<?php
				$locations     = get_nav_menu_locations();
				$location_name = 'primary';
				$menu_id       = $locations[ $location_name ];

				wp_nav_menu(
					array(
						'menu' => $menu_id,
						'theme_location'  => 'primary',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
</header><!-- #masthead -->
 
  