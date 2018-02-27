<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pique
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pique' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php

		$jetpack_options = get_theme_mod( 'jetpack_testimonials' );

		// Let's show a header image if we aren't on the front page
		if ( ! pique_is_frontpage() ) :
			// If the post uses a Featured Image, let's show that
			if ( is_singular() && pique_is_woocommerce_in_view() && has_post_thumbnail() ) : ?>
				<a class="pique-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php the_post_thumbnail( 'pique-header', array( 'id' => 'pique-header-image' ) ); ?>
				</a>
			<?php
			// If on the Testimonials archive type
			elseif ( is_post_type_archive( 'jetpack-testimonial' ) && 0 != $jetpack_options['featured-image'] ) :
				$testimonials_header = wp_get_attachment_image_src( (int)$jetpack_options['featured-image'], 'pique-header' ); ?>
				<a class="pique-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( $testimonials_header[0] ); ?>" id="pique-header-image">
				</a>
			<?php
			// Otherwise, let's just show the header image
			elseif ( get_header_image() ): ?>
				<a class="pique-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img id="pique-header-image" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			<?php endif; // End featured image check. ?>
		<?php endif; // End is frontpage check. ?>

		<div class="site-branding">
			<?php pique_the_site_logo(); ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<?php if ( pique_is_frontpage() AND get_theme_mod( 'pique_menu' ) ) : ?>

			<?php
			// Get each of our panels and output a link to that section ID on the page
			foreach ( range( 1, 8 ) as $panel ) :
				if ( get_theme_mod( 'pique_panel' . $panel ) ) :
					$post = get_post( get_theme_mod( 'pique_panel' . $panel ) );
					setup_postdata( $post );
					// Just in case the user didn't set a title for the page, we're going to generate one from the slug
					if ( '' === get_the_title() ) :
						$title = str_replace( '-', ' ', $post->post_name );
					else :
						$title = get_the_title();
					endif;
					$panel_links[] = '<li><a href="#post-' . get_the_ID() . '">' . $title . '</a></li>';
					wp_reset_postdata();
				endif;
			endforeach;

			// Output our menu only if we actually have menu items
			if ( isset( $panel_links ) ) : ?>
			<div id="site-navigation-wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<ul id="primary-menu" class="menu nav-menu">
						<?php
						foreach ( $panel_links as $key => $link ) :
							// Output menu link
							echo wp_kses( $link, array(
												'a' => array(
															'href' => array(),
															'title' => array(),
														),
												'li' => array(),
												)
							);
						endforeach;
						?>
						<li id="more-menu" class="menu-item menu-item-has-children"><a href="#"><span class="screen-reader-text">More</span></a><ul class="sub-menu"></ul></li>
					</ul>
				</nav><!-- #site-navigation -->
			</div>
			<?php endif; ?>

		<?php elseif ( has_nav_menu( 'primary' ) ) : ?>
		<div id="site-navigation-wrapper">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'walker'          => new Pique_Menu(),
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
		<?php endif; ?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
