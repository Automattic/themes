<?php
/**
 * Displays the header. 
 * Needed until we have a consistent mechanism to render a navigation between FSE and classic menus.
 * 
 * @package Quadrat
 * @since 1.0.0
 * 
 */
$menu_location = 'primary';
$has_primary_nav       = has_nav_menu( $menu_location );
$has_primary_nav_items = wp_nav_menu(
	array(
		'theme_location' => $menu_location,
		'fallback_cb'    => false,
		'echo'           => false,
	)
);
?>

<header class="site-header" role="banner">
	<?php if ( has_custom_logo() ) : ?>
		<?php echo do_blocks( '<!-- wp:site-logo {"align":"center","width":128} /-->' ); ?>
	<?php endif; ?>
	<?php echo do_blocks( '<!-- wp:site-title /-->' ); ?>
	<?php echo do_blocks( '<!-- wp:site-description /-->' ); ?>
	<?php 
		if ( $has_primary_nav && $has_primary_nav_items ) :
			wp_nav_menu(
				array(
					'theme_location'   => $menu_location,
					'container'        => '',
					'items_wrap'       => '%3$s',
					'fallback_cb'      => false,
				)
			);
		endif;
	?>
</header><!-- #masthead -->