<?php
/**
 * Block Patterns
 *
 * @package Blank Canvas
 * @since   1.0
 */

if ( ! function_exists( 'blank_canvas_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns.
	 */
	function blank_canvas_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'blank-canvas-blocks',
				array( 'label' => __( 'Blank Canvas', 'blank-canvas-blocks' ) )
			);

			register_block_pattern_category(
				'link-in-bio',
				array( 'label' => __( 'Link in Bio', 'blank-canvas-blocks' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'blank-canvas-blocks/about-me',
				array(
					'title'      => __( 'About Me', 'blank-canvas-blocks' ),
					'categories' => array( 'blank-canvas-blocks' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:media-text {"mediaPosition":"right","mediaId":1752,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-tattoo.jpg' ) . '","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-tattoo.jpg' ) . ');background-position:50% 50%"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-tattoo.jpg' ) . '" alt="' . esc_attr__( 'A photo of a tattooed hand, giving the "I love you" sign.', 'blank-canvas-blocks' ) . '" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="alignwide" style="font-size:32px"><strong>' . esc_html__( 'Hi! I’m a tattooist based in Florida City.', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:paragraph -->
									<p>' . esc_html__( 'Specializing in fine line tattoos with a single needle. With over 10 years of experience, I can make your tattoo dreams come true.', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#d35069"}},"textColor":"white"} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background" style="background-color:#d35069">' . esc_html__( 'Get in touch', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:social-links {"className":"is-style-default"} -->
									<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:spacer -->
									<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links',
				array(
					'title'      => __( 'Links', 'blank-canvas-blocks' ),
					'categories' => array( 'blank-canvas-blocks', 'link-in-bio' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:image {"align":"center","id":20,"width":98,"height":95,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-hat.jpg' ) . '" alt="' . esc_attr__( 'Photo of a man wearing a hat.', 'blank-canvas-blocks' ) . '" class="wp-image-20" width="98" height="95"/></figure></div>
									<!-- /wp:image -->
									<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="has-text-align-center" style="font-size:32px"><strong>' . esc_html__( 'Alex Fredrickson', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.65"}}} -->
									<p class="has-text-align-center" style="font-size:20px;line-height:1.65">' . esc_html__( 'My latest and greatest tips, resources, and reads.', 'blank-canvas-blocks' ) . '<br />' . esc_html__( 'So much goodness all in one place!', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":"","width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . esc_html__( 'Must read: The Place That Made Me', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . esc_html__( 'Rain Journal by Richard Johnson', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . esc_html__( '10th Day of Rain', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . esc_html__( 'Blurring the Lines Between Architecture and Nature', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . esc_html__( 'Instant Classic: A story of Persistence', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/invitation',
				array(
					'title'      => __( 'Invitation', 'blank-canvas-blocks' ),
					'categories' => array( 'blank-canvas-blocks' ),
					'content'    => '<!-- wp:media-text {"mediaId":2207,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-drink.jpg' ) . '","mediaType":"image","verticalAlignment":"center","imageFill":true,"style":{"color":{"background":"#f5fff4"}}} -->
									<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill has-background" style="background-color:#f5fff4"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-drink.jpg' ) . ');background-position:50% 50%"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-drink.jpg' ) . '" alt="' . esc_attr__( 'Photo of two drinks.', 'blank-canvas-blocks' ) . '" class="wp-image-2207 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":60} -->
									<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:heading {"level":1,"style":{"color":{"text":"#c61aa7"}}} -->
									<h1 class="has-text-color" style="color:#c61aa7"><strong>' . esc_html__( 'You&rsquo;re Invited', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . esc_html__( 'Pier 38', 'blank-canvas-blocks' ) . '<br />' . esc_html__( 'San Francisco, CA', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->
									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . esc_html__( '8pm–12am', 'blank-canvas-blocks' ) . '<br />' . esc_html__( 'April 16th', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									<!-- wp:separator {"customColor":"#e343cd","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#e343cd;color:#e343cd"/>
									<!-- /wp:separator -->
									<!-- wp:paragraph -->
									<p>' . esc_html__( 'Join us for a celebratory party featuring creative cocktails and mocktails, seasonal chef-crafted snacks and appetizers, and a range of desserts and pastries from local bakeries.', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#c61aa7"}},"textColor":"white","className":"is-style-fill"} -->
									<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background" style="background-color:#c61aa7">' . esc_html__( 'RSVP', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:spacer {"height":60} -->
									<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/split-screen',
				array(
					'title'      => __( 'Split Screen', 'blank-canvas-blocks' ),
					'categories' => array( 'blank-canvas-blocks' ),
					'content'    => '<!-- wp:media-text {"align":"full","mediaId":598,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-camera.jpg' ) . '","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-camera.jpg' ) . ');background-position:50% 50%"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-camera.jpg' ) . '" alt="' . esc_attr__( 'Photo of a vintage camera.', 'blank-canvas-blocks' ) . '" class="wp-image-598 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:cover {"overlayColor":"white","minHeight":95,"minHeightUnit":"vh"} -->
									<div class="wp-block-cover has-white-background-color has-background-dim" style="min-height:95vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":624,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-woman.jpg' ) . '" alt="' . esc_attr__( 'Photo of a woman.', 'blank-canvas-blocks' ) . '" class="wp-image-624" width="200" height="200"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"textColor":"almost-black"} -->
									<h1 class="has-text-align-center has-almost-black-color has-text-color"><strong>' . esc_html__( 'Jasmine Baker', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","textColor":"almost-black"} -->
									<p class="has-text-align-center has-almost-black-color has-text-color">' . esc_html__( 'Hello! I am a photographer and designer living near Portland, Maine. When I am not posting to Instagram, you can find me shooting weddings and portraits.', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

									<!-- wp:social-link {"url":"https://www.tiktok.com","service":"tiktok"} /-->

									<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

									<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:cover --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links-emoji',
				array(
					'title'      => __( 'Emoji Links', 'blank-canvas-blocks' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%)","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-dim has-background-gradient" style="background:linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":36,"width":96,"height":96,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-hamburger.png' ) . '" alt="' . esc_attr__( 'Hamburger icon', 'blank-canvas-blocks' ) . '" class="wp-image-36" width="96" height="96"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1} -->
									<h1 class="has-text-align-center"><strong>' . esc_html__( 'Hamburger', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"borderRadius":50,"backgroundColor":"white","textColor":"almost-black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-almost-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">📺  ' . esc_html__( 'Subscribe on YouTube', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"white","textColor":"almost-black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-almost-black-color has-white-background-color has-text-color has-background" style="border-radius:50px"> 🎹  ' . esc_html__( 'Listen on SoundCloud', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"white","textColor":"almost-black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-almost-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">📸  ' . esc_html__( 'Follow my Instagram', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"white","textColor":"almost-black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-almost-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">🛍  ' . esc_html__( 'Shop my style picks', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"white","textColor":"almost-black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-almost-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">🙋‍♀️  ' . esc_html__( 'Ask me a question', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links-gradient',
				array(
					'title'      => __( 'Gradient Links', 'blank-canvas-blocks' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"white","minHeight":1090,"minHeightUnit":"px","align":"full"} -->
									<div class="wp-block-cover alignfull has-white-background-color has-background-dim" style="min-height:1090px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":130,"width":96,"height":96,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-pencils.jpg' ) . '" alt="' . esc_attr__( 'Colored pencils', 'blank-canvas-blocks' ) . '" class="wp-image-130" width="96" height="96"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center"} -->
									<h2 class="has-text-align-center"><strong>' . esc_html__( 'Antonio Miller', 'blank-canvas-blocks' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(11,192,224) 0%,rgb(128,208,199) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(11,192,224) 0%,rgb(128,208,199) 100%)">' . esc_html__( 'Watch my tutorials', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(65,88,208) 0%,rgb(200,80,192) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(65,88,208) 0%,rgb(200,80,192) 100%)">' . esc_html__( 'Buy prints of my work', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(174,61,255) 0%,rgb(226,39,86) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(174,61,255) 0%,rgb(226,39,86) 100%)">' . esc_html__( 'My wish list', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(224,44,44) 0%,rgb(249,197,57) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(224,44,44) 0%,rgb(249,197,57) 100%)">' . esc_html__( 'Instagram', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(0,173,121) 0%,rgb(41,182,229) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(0,173,121) 0%,rgb(41,182,229) 100%)">' . esc_html__( 'Twitter', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links-musician',
				array(
					'title'      => __( 'Musician Links', 'blank-canvas-blocks' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-gradient.jpg' ) . '","id":181,"hasParallax":true,"dimRatio":0,"overlayColor":"black","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-black-background-color has-parallax" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-gradient.jpg' ) . ');min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":30,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-singer.png' ) . '" alt="' . esc_attr__( 'Image of a singer performing.', 'blank-canvas-blocks' ) . '" class="wp-image-30" width="120" height="120"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
									<h1 class="has-text-align-center has-huge-font-size"><strong>' . esc_html__( 'Alex Smith — Own Way', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:embed {"providerNameSlug":"youtube","responsive":true} /-->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'SoundCloud', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'Spotify', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'Bandcamp', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'Apple Music', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'YouTube', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"white","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'Tidal', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->

									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->

									<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links-product',
				array(
					'title'      => __( 'Product Links', 'blank-canvas-blocks' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:image {"align":"center","id":57,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/images/pattern-links-sunglasses.jpg' ) . '" alt="' . esc_attr__( 'Woman wearing sunglasses', 'blank-canvas-blocks' ) . '" class="wp-image-57" width="150" height="150"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"textColor":"black"} -->
									<h1 class="has-text-align-center has-black-color has-text-color"><strong>' . esc_html__( 'Julia Paxton', 'blank-canvas-blocks' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:separator {"color":"black","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . esc_html__( 'Rhinestone Earrings, ASOS', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-black-background-color has-background">' . esc_html__( '$36', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"black","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . esc_html__( 'Pink Long Sleeve Tea Dress, Topshop', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-black-background-color has-background">' . esc_html__( '$45', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"black","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . esc_html__( 'Chunky Platform Lace-Up Boots, H&amp;M', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-black-background-color has-background">' . esc_html__( '$60', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"black","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . esc_html__( 'Oversized Alpaca Crew, Everlane', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"black","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-black-background-color has-background">' . esc_html__( '$70', 'blank-canvas-blocks' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"black","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:social-links {"align":"center","className":"is-style-logos-only"} -->
									<ul class="wp-block-social-links aligncenter is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

									<!-- wp:social-link {"url":"https://snapchat.com","service":"snapchat"} /-->

									<!-- wp:social-link {"url":"https://wordpress.com","service":"wordpress"} /--></ul>
									<!-- /wp:social-links -->',
				)
			);

			register_block_pattern(
				'blank-canvas-blocks/links-text',
				array(
					'title'      => __( 'Text Links', 'blank-canvas-blocks' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:group -->
									<div class="wp-block-group"><!-- wp:image {"align":"left","id":100,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none"} -->
									<div class="wp-block-image"><figure class="alignleft size-large is-resized"><img src="http://localhost:4759/wp-content/themes/blank-canvas-blocks/assets/images/pattern-links-logo.png" alt="A logo of a circle with a line through it." class="wp-image-100" width="100" height="100"/></figure></div>
									<!-- /wp:image --></div>
									<!-- /wp:group -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"left","level":1} -->
									<h1 class="has-text-align-left">' . esc_html__( 'Patricia Jones', 'blank-canvas-blocks' ) . '</h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p><em>' . esc_html__( 'Published work and ephemera.', 'blank-canvas-blocks' ) . '</em></p>
									<!-- /wp:paragraph -->

									<!-- wp:separator {"customColor":"#959595","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#959595;color:#959595"/>
									<!-- /wp:separator -->

									<!-- wp:paragraph -->
									<p><a href="#">' . esc_html__( '“The Lost Tricycle” Book', 'blank-canvas-blocks' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . esc_html__( '"Why we must own our history"', 'blank-canvas-blocks' ) . '</a>' . wp_kses_post( ' in <em>The Atlantic</em>', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . esc_html__( '"Identity and Ownership"', 'blank-canvas-blocks' ) . '</a>' . wp_kses_post( ' in <em>The New York Times</em>', 'blank-canvas-blocks' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . esc_html__( 'Sponsor: Crafty Cookies', 'blank-canvas-blocks' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . esc_html__( 'Donate to help keep us posting!', 'blank-canvas-blocks' ) . '</a></p>
									<!-- /wp:paragraph -->',
				)
			);
		}
	}
endif;
add_action( 'after_setup_theme', 'blank_canvas_register_block_patterns', 12 );
