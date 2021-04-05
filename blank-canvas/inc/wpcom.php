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
 * Enqueue CSS for Customizer message.
 */
function blank_canvas_customizer_enqueue() {
	wp_enqueue_style( 'blank-canvas-customizer-style', get_stylesheet_directory_uri() . '/inc/wpcom-customizer.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'blank_canvas_customizer_enqueue' );

/**
 * Register WP.com-only block patterns.
 */
if ( ! function_exists( 'blank_canvas_register_wpcom_block_patterns' ) ) :
	function blank_canvas_register_wpcom_block_patterns() {
		
		if ( function_exists( 'register_block_pattern' ) ) {

			/* This pattern is WP.com-only because it relies on the Layout Grid block. */
			register_block_pattern(
				'blank-canvas/card',
				array(
					'title'      => __( 'Card', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:jetpack/layout-grid {"column1DesktopSpan":4,"column1DesktopOffset":4,"column1TabletSpan":4,"column1TabletOffset":2,"column1MobileSpan":4,"column2DesktopOffset":8,"column2TabletOffset":13,"className":"column1-desktop-grid__span-4 column1-desktop-grid__start-5 column1-desktop-grid__row-1 column1-tablet-grid__span-4 column1-tablet-grid__start-3 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"} -->
									<div class="wp-block-jetpack-layout-grid alignfull column1-desktop-grid__span-4 column1-desktop-grid__start-5 column1-desktop-grid__row-1 column1-tablet-grid__span-4 column1-tablet-grid__start-3 column1-tablet-grid__row-1 column1-mobile-grid__span-4 column1-mobile-grid__row-1"><!-- wp:jetpack/layout-grid-column -->
									<div class="wp-block-jetpack-layout-grid-column wp-block-jetpack-layout-grid__padding-none"><!-- wp:image {"id":16,"sizeSlug":"large","linkDestination":"none","className":"margin-bottom-none"} -->
									<figure class="wp-block-image size-large margin-bottom-none"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-portrait.jpg' ) . '" alt="'. esc_attr__( 'Portrait of a woman against a pink and blue background.', 'blank-canvas' ) . '"/></figure>
									<!-- /wp:image -->

									<!-- wp:group {"className":"margin-top-none","style":{"color":{"background":"#ebfbff"}}} -->
									<div class="wp-block-group margin-top-none has-background" style="background-color:#ebfbff"><div class="wp-block-group__inner-container"><!-- wp:heading {"level":1,"className":"margin-bottom-none","textColor":"primary","style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="margin-bottom-none has-primary-color has-text-color" style="font-size:32px"><strong>' . __( 'Kate Adams', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"className":"margin-top-half","textColor":"primary","style":{"typography":{"fontSize":"18px"}}} -->
									<p class="margin-top-half has-primary-color has-text-color" style="font-size:18px">'. esc_html__( 'Hi! I’m a lead strategist for growing sustainable revenue streams for integrated fundraising.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":4,"style":{"color":{"text":"#ffffff","background":"#067eb1"}}} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background" style="border-radius:4px;background-color:#067eb1;color:#ffffff">'. esc_html__( 'Get in touch', 'blank-canvas' ) . '</a></div>
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

			/* This pattern is WP.com-only because it relies on the Contact Form block. */
			register_block_pattern(
				'blank-canvas/email-signup',
				array(
					'title'      => __( 'Email Signup', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-art.jpg' ) . '","id":1934,"dimRatio":60,"overlayColor":"secondary","minHeight":100,"minHeightUnit":"vh","contentPosition":"top left","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-dim-60 has-secondary-background-color has-background-dim has-custom-content-position is-position-top-left" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-art.jpg' ) . ');min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column {"width":"5%"} -->
									<div class="wp-block-column" style="flex-basis:5%"></div>
									<!-- /wp:column -->

									<!-- wp:column {"width":50} -->
									<div class="wp-block-column" style="flex-basis:50%"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"32px"}}} -->
									<h1 style="font-size:32px"><strong>'. esc_html__( 'Virtual Art Classes', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p>'. esc_html__( 'Join instructor Jaime Adams for a series of virtual classes aimed at helping you hone your drawing skills. We will focus on composition, perspective, contour, representing volume, and more!', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:jetpack/contact-form -->
									<!-- wp:jetpack/field-email {"required":true,"options":[]} /-->

									<!-- wp:jetpack/button {"element":"button","text":"'. esc_html__( 'Learn More', 'blank-canvas' ) . '","textColor":"secondary","backgroundColor":"background"} /-->
									<!-- /wp:jetpack/contact-form --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div></div>
									<!-- /wp:cover -->',
				)
			);


			/* 
			 * @TODO: This is commented out until the following Jetpack issue is resolved: 
			 * https://github.com/Automattic/jetpack/issues/19113
			 * 
			 * This pattern is WP.com-only because it relies on the Jetpack Subscription block.
			register_block_pattern(
				'blank-canvas/links-subscription-form',
				array(
					'title'      => __( 'Subscription Form and Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-primary-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":71,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-guitar.jpg' ) . '" alt="'. esc_attr__( 'Image of a man with a guitar.', 'blank-canvas' ) . '" class="wp-image-71" width="120" height="120"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"textColor":"background"} -->
									<h1 class="has-text-align-center has-background-color has-text-color"><strong>'. esc_html__( 'Narrow Dog', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","textColor":"background"} -->
									<p class="has-text-align-center has-background-color has-text-color"><em>'. esc_html__( 'Noise Rock from Milwaukee, WI', 'blank-canvas' ) . '</em></p>
									<!-- /wp:paragraph -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:jetpack/subscriptions {"subscribePlaceholder":"Enter your email address","buttonBackgroundColor":"background","textColor":"primary","fontSize":"undefinedpx","customFontSize":"undefinedpx","padding":16} -->
									<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form subscribe_placeholder="Enter your email address" show_subscribers_total="false" button_on_newline="false" custom_font_size="undefinedpx" custom_border_radius="0" custom_border_weight="1" custom_padding="16" custom_spacing="10" submit_button_classes="has-undefinedpx-font-size has-text-color has-primary-color has-background has-background-background-color" email_field_classes="has-undefinedpx-font-size" show_only_email_and_button="true"]</div>
									<!-- /wp:jetpack/subscriptions -->

									<!-- wp:buttons {"contentJustification":"left"} -->
									<div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"borderRadius":0,"backgroundColor":"background","textColor":"primary","width":50} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background no-border-radius">'. esc_html__( 'Spotify', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":0,"backgroundColor":"background","textColor":"primary","width":50} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background no-border-radius">'. esc_html__( 'Bandcamp', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":0,"backgroundColor":"background","textColor":"primary","width":50} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background no-border-radius">'. esc_html__( 'Merch', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":0,"backgroundColor":"background","textColor":"primary","width":50} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background no-border-radius">'. esc_html__( 'Website', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://spotify.com","service":"spotify"} /-->

									<!-- wp:social-link {"url":"https://soundcloud.com","service":"soundcloud"} /-->

									<!-- wp:social-link {"url":"https://apple.com/itunes","service":"chain"} /--></ul>
									<!-- /wp:social-links -->

									<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>',
				)
			); */

			register_block_pattern(
				'blank-canvas/coming-soon-solid-color',
				array(
					'title'      => __( 'Coming Soon: Solid Color', 'blank-canvas' ),
					'categories' => array( 'coming-soon' ),
					'content'    => '<!-- wp:cover {"customOverlayColor":"#e8ffe6","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-dim" style="background-color:#e8ffe6;min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":2742,"width":100,"height":100,"sizeSlug":"medium","linkDestination":"none"} -->
									<div class="wp-block-image"><figure class="aligncenter size-medium is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-notice.png' ) . '" alt="' . esc_html__( 'A megaphone icon with sharp angles.', 'blank-canvas' ) . '" class="wp-image-2742" width="100" height="100"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:spacer {"height":5} -->
									<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontSize":"100px","lineHeight":"1.2"}},"textColor":"primary"} -->
									<h2 class="alignwide has-text-align-center has-primary-color has-text-color" style="font-size:100px;line-height:1.2"><strong>' . esc_html__( 'Coming Soon', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","textColor":"primary"} -->
									<p class="has-text-align-center has-primary-color has-text-color">' . esc_html__( 'Sign up to hear when my journey begins.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"background","borderRadius":6} -->
									<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="6" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-text-color has-background-color has-background has-primary-background-color" email_field_classes="" show_only_email_and_button="true"]</div>
									<!-- /wp:jetpack/subscriptions -->

									<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","align":"center","className":"is-style-logos-only"} -->
									<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

									<!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas/coming-soon-simple',
				array(
					'title'      => __( 'Coming Soon: Simple', 'blank-canvas' ),
					'categories' => array( 'coming-soon' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":948,"minHeightUnit":"px","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:948px"><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"full"} -->
									<div class="wp-block-columns alignfull"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:heading {"textColor":"primary","style":{"typography":{"lineHeight":"0.9","fontSize":"120px"}}} -->
									<h2 class="has-primary-color has-text-color" style="font-size:120px;line-height:0.9"><strong>' . esc_html__( 'Coming Soon', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"textColor":"primary"} -->
									<p class="has-primary-color has-text-color">' . esc_html__( 'A new blog by MindStomp. Sign up to be notified when we launch.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"background","textColor":"primary","borderRadius":0,"borderWeight":3,"borderColor":"#000000","customBorderColor":"#000000"} -->
									<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="0" custom_border_weight="3" custom_border_color="#000000" custom_padding="15" custom_spacing="10" submit_button_classes="no-border-radius has-000000-border-color has-text-color has-primary-color has-background has-background-background-color" email_field_classes="no-border-radius has-000000-border-color" show_only_email_and_button="true"]</div>
									<!-- /wp:jetpack/subscriptions --></div>
									<!-- /wp:column -->

									<!-- wp:column -->
									<div class="wp-block-column"></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas/coming-soon-app',
				array(
					'title'      => __( 'Coming Soon: App', 'blank-canvas' ),
					'categories' => array( 'coming-soon' ),
					'content'    => '<!-- wp:media-text {"align":"full","mediaPosition":"right","mediaId":2787,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-watch.jpg' ) . '","mediaType":"image","mediaWidth":54,"imageFill":false} -->
									<div class="wp-block-media-text alignfull has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 54%"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-watch.jpg' ) . '" alt="' . esc_html__( 'A close-up of a black smart watch against a pink background.', 'blank-canvas' ) . '" class="wp-image-2787 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"style":{"color":{"text":"#2b353a"},"typography":{"fontSize":"50px","lineHeight":"1.2"}}} -->
									<h2 class="has-text-color" style="color:#2b353a;font-size:50px;line-height:1.2"><strong>' . esc_html__( 'A new app for designers', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"textColor":"primary"} -->
									<p class="has-primary-color has-text-color">' . esc_html__( 'We’re launching soon. Be the first to sign up!', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:jetpack/subscriptions {"submitButtonText":"\u003cstrong\u003eSUBSCRIBE\u003c/strong\u003e","customButtonBackgroundColor":"#dfcbda","textColor":"primary","borderRadius":4,"padding":20} -->
									<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" submit_button_text="<strong>' . esc_html__( 'SUBSCRIBE', 'blank-canvas' ) . '</strong>" custom_background_button_color="#dfcbda" custom_font_size="16px" custom_border_radius="4" custom_border_weight="1" custom_padding="20" custom_spacing="10" submit_button_classes="has-text-color has-primary-color" email_field_classes="" show_only_email_and_button="true"]</div>
									<!-- /wp:jetpack/subscriptions --></div></div>
									<!-- /wp:media-text -->',
				)
			);
		}
	}
endif;
add_action( 'after_setup_theme', 'blank_canvas_register_wpcom_block_patterns', 12 );