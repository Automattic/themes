<?php
/**
 * WordPress.com-specific functions and definitions.
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Blank Canvas
 */

/**
 * Remove setting for hiding page title on the homepage.
 */
function blank_canvas_wpcom_customize_update( $wp_customize ) {
	$wp_customize->remove_control( 'hide_front_page_title');
}
add_action( 'customize_register', 'blank_canvas_wpcom_customize_update', 11 );

/**
 * Register WP.com-only block patterns.
 */
if ( ! function_exists( 'blank_canvas_register_wpcom_block_patterns' ) ) :
	function blank_canvas_register_wpcom_block_patterns() {
		
		if ( function_exists( 'register_block_pattern' ) ) {

			/* This pattern is WP.com-Only Beacuse it relies on the Layout Grid block. */
			register_block_pattern(
				'blank-canvas/card',
				array(
					'title'      => __( 'Card', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:jetpack/layout-grid {"column1DesktopSpan":4,"column1DesktopOffset":4,"column1TabletSpan":4,"column1TabletOffset":2,"column1MobileSpan":4,"column2DesktopOffset":8,"column2TabletOffset":13,"className":"column1-desktop-grid__span-4 column1-desktop-grid__start-5 column1-desktop-grid__row-1 column1-tablet-grid__span-4 column1-tablet-grid__start-3 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
									<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-4 column1-desktop-grid__start-5 column1-desktop-grid__row-1 column1-tablet-grid__span-4 column1-tablet-grid__start-3 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
									<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:image {"id":16,"sizeSlug":"large","linkDestination":"none","className":"margin-bottom-none"} -->
									<figure class="wp-block-image size-large margin-bottom-none"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-portrait.jpg" alt="' . __( 'Portrait of a woman against a pink and blue background.', 'blank-canvas' ) . '"/></figure>
									<!-- /wp:image -->

									<!-- wp:group {"className":"margin-top-none","style":{"color":{"background":"#ebfbff"}}} -->
									<div class="wp-block-group margin-top-none has-background" style="background-color:#ebfbff"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"margin-bottom-none","textColor":"primary"} -->
									<h2 class="margin-bottom-none has-primary-color has-text-color"><strong>' . __( 'Kate Pollard', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"className":"margin-top-half","textColor":"primary","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="margin-top-half has-primary-color has-text-color" style="font-size:18px">' . __( 'Hi! I’m a lead strategist for growing sustainable revenue streams for integrated fundraising.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":4,"style":{"color":{"text":"#ffffff","background":"#067eb1"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:4px;background-color:#067eb1;color:#ffffff">' . __( 'Get in touch', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:social-links {"align":"center"} -->
									<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->

									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:group --></div>
									<!-- /wp:jetpack/layout-grid-column --></div>
									<!-- /wp:jetpack/layout-grid -->',
				)
			);
		}
	}
endif;
add_action( 'after_setup_theme', 'blank_canvas_register_wpcom_block_patterns', 12 );