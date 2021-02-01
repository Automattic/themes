<?php
/**
 * Block Patterns
 *
 * @package Blank Canvas
 * @since   1.0
 */

if ( ! function_exists( 'blank_canvas_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns and unregisters Seedlet's.
	 */
	function blank_canvas_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'blank-canvas',
				array( 'label' => __( 'Blank Canvas', 'blank-canvas' ) )
			);

			register_block_pattern_category(
				'link-in-bio',
				array( 'label' => __( 'Link in Bio', 'blank-canvas' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'blank-canvas/about-me',
				array(
					'title'      => __( 'About Me', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:media-text {"mediaPosition":"right","mediaId":1752,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg" alt="' . __( 'A photo of a tattooed hand, giving the "I love you" sign.', 'blank-canvas' ) . '" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="alignwide" style="font-size:32px"><strong>' . __( 'Hi! I’m a tattooist based in Florida City.', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:paragraph -->
									<p>' . __( 'Specializing in fine line tattoos with a single needle. With over 10 years of experience, I can make your tattoo dreams come true.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#d35069"}},"textColor":"background"} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#d35069">' . __( 'Get in touch', 'blank-canvas' ) . '</a></div>
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
				'blank-canvas/links',
				array(
					'title'      => __( 'Links', 'blank-canvas' ),
					'categories' => array( 'blank-canvas', 'link-in-bio' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:image {"align":"center","id":20,"width":98,"height":95,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-hat.jpg" alt="' . __( 'Photo of a man wearing a hat.', 'blank-canvas' ) . '" class="wp-image-20" width="98" height="95"/></figure></div>
									<!-- /wp:image -->
									<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="has-text-align-center" style="font-size:32px"><strong>' . __( 'Alex Fredrickson', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.65"}}} -->
									<p class="has-text-align-center" style="font-size:20px;line-height:1.65">' . __( 'My latest and greatest tips, resources, and reads.<br>So much goodness all in one place!', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"borderRadius":"","width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Must read: The Place That Made Me', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Rain Journal by Richard Johnson', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( '10th Day of Rain', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Blurring the Lines Between Architecture and Nature', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">' . __( 'Instant Classic: A story of Persistence', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->',
				)
			);

			register_block_pattern(
				'blank-canvas/invitation',
				array(
					'title'      => __( 'Invitation', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:media-text {"mediaId":2207,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg","mediaType":"image","verticalAlignment":"center","imageFill":true,"style":{"color":{"background":"#f5fff4"}}} -->
									<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill has-background" style="background-color:#f5fff4"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg" alt="Photo of two drinks." class="wp-image-2207 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:heading {"level":1,"style":{"color":{"text":"#c61aa7"}}} -->
									<h1 class="has-text-color" style="color:#c61aa7"><strong>' . __( 'You&rsquo;re Invited', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( 'Pier 38<br>San Francisco, CA', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->
									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( '8pm–12am<br>April 16th', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									<!-- wp:separator {"customColor":"#e343cd","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#e343cd;color:#e343cd"/>
									<!-- /wp:separator -->
									<!-- wp:paragraph -->
									<p>' . __( 'Join us for a celebratory party featuring creative cocktails and mocktails, seasonal chef-crafted snacks and appetizers, and a range of desserts and pastries from local bakeries.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#c61aa7"}},"textColor":"background","className":"is-style-fill"} -->
									<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#c61aa7">' . __( 'RSVP', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:spacer {"height":30} -->
									<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas/split-screen',
				array(
					'title'      => __( 'Split Screen', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:media-text {"align":"full","mediaId":598,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignfull is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-camera.jpg" alt="' . __( 'Photo of a vintage camera.', 'blank-canvas' ) . '" class="wp-image-598 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:cover {"overlayColor":"background","minHeight":95,"minHeightUnit":"vh"} -->
									<div class="wp-block-cover has-background-background-color has-background-dim" style="min-height:95vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":624,"width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-woman.jpg" alt="' . __( 'Photo of a woman.', 'blank-canvas' ) . '" class="wp-image-624" width="200" height="200"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1} -->
									<h1 class="has-text-align-center"><strong>' . __( 'Jasmine Baker', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"align":"center","backgroundColor":"background"} -->
									<p class="has-text-align-center has-background-background-color has-background">' . __( 'Hello! I am a photographer and designer living near Portland, Maine. When I am not posting to Instagram, you can find me shooting weddings and portraits.', 'blank-canvas' ) . '</p>
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
				'blank-canvas/links-emoji',
				array(
					'title'      => __( 'Emoji Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%)","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-dim has-background-gradient" style="background:linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":36,"width":96,"height":96,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-hamburger.png" alt="' . __( 'Hamburger icon', 'blank-canvas' ) . '" class="wp-image-36" width="96" height="96"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1} -->
									<h1 class="has-text-align-center"><strong>' . __( 'Hamburger', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">📺  ' . __( 'Subscribe on YouTube', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px"> 🎹  ' . __( 'Listen on SoundCloud', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">📸  ' . __( 'Follow my Instagram', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">🛍  ' . __( 'Shop my style picks', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">🙋‍♀️  ' . __( 'Ask me a question', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->

									<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas/links-gradient',
				array(
					'title'      => __( 'Gradient Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":1090,"minHeightUnit":"px","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:1090px"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":130,"width":96,"height":96,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-pencils.jpg" alt="' . __( 'Colored pencils', 'blank-canvas' ) . '" class="wp-image-130" width="96" height="96"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center"} -->
									<h2 class="has-text-align-center"><strong>' . __( 'Antonio Miller', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(11,192,224) 0%,rgb(128,208,199) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(11,192,224) 0%,rgb(128,208,199) 100%)">' . __( 'Watch my tutorials', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(65,88,208) 0%,rgb(200,80,192) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(65,88,208) 0%,rgb(200,80,192) 100%)">' . __( 'Buy prints of my work', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(174,61,255) 0%,rgb(226,39,86) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(174,61,255) 0%,rgb(226,39,86) 100%)">' . __( 'My wish list', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(224,44,44) 0%,rgb(249,197,57) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(224,44,44) 0%,rgb(249,197,57) 100%)">' . __( 'Instagram', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"borderRadius":10,"style":{"color":{"gradient":"linear-gradient(135deg,rgb(0,173,121) 0%,rgb(41,182,229) 100%)"}},"width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background" style="border-radius:10px;background:linear-gradient(135deg,rgb(0,173,121) 0%,rgb(41,182,229) 100%)">' . __( 'Twitter', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas/links-musician',
				array(
					'title'      => __( 'Musician Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"url":"' . get_stylesheet_directory_uri() . '/assets/pattern-links-gradient.jpg","id":181,"hasParallax":true,"dimRatio":0,"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-primary-background-color has-parallax" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-links-gradient.jpg);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":30,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none"} -->
									<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-singer.png" alt="' . __( 'Image of a singer performing.', 'blank-canvas' ) . '" class="wp-image-30" width="120" height="120"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
									<h1 class="has-text-align-center has-huge-font-size">' . __( '<strong>Alex Smith</strong>: <em>Your Own Way</em>', 'blank-canvas' ) . '</h1>
									<!-- /wp:heading -->

									<!-- wp:embed {"url":"https://www.youtube.com/watch?v=_qX8CYToBbQ","type":"rich","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
									<figure class="wp-block-embed is-type-rich is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
									https://www.youtube.com/watch?v=_qX8CYToBbQ
									</div></figure>
									<!-- /wp:embed -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'SoundCloud', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Spotify', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Bandcamp', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Apple Music', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'YouTube', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Tidal', 'blank-canvas' ) . '</a></div>
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
				'blank-canvas/links-product',
				array(
					'title'      => __( 'Product Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":57,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-sunglasses.jpg" alt="' . __( 'Woman wearing sunglasses', 'blank-canvas' ) . '" class="wp-image-57" width="150" height="150"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"textColor":"primary"} -->
									<h1 class="has-text-align-center has-primary-color has-text-color"><strong>@juliapaxton</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . __( 'Rhinestone Earrings, ASOS', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$36', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . __( 'Pink Long Sleeve Tea Dress, Topshop', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$45', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . __( 'Chunky Platform Lace-Up Boots, H&amp;M', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$60', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:columns {"verticalAlignment":"center"} -->
									<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
									<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:paragraph -->
									<p>' . __( 'Oversized Alpaca Crew, Everlane', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$70', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->

									<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
									<!-- /wp:separator -->

									<!-- wp:social-links {"align":"center","className":"is-style-logos-only"} -->
									<ul class="wp-block-social-links aligncenter is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

									<!-- wp:social-link {"url":"https://snapchat.com","service":"snapchat"} /-->

									<!-- wp:social-link {"url":"https://wordpress.com","service":"wordpress"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'blank-canvas/links-text',
				array(
					'title'      => __( 'Text Links', 'blank-canvas' ),
					'categories' => array( 'link-in-bio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"left","id":100,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none"} -->
									<div class="wp-block-image"><figure class="alignleft size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-logo.png" alt="' . __( 'A logo of a circle with a line through it.', 'blank-canvas' ) . '" class="wp-image-100" width="100" height="100"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"left","level":1} -->
									<h1 class="has-text-align-left">' . __( 'Patricia Jones', 'blank-canvas' ) . '</h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p><em>' . __( 'Published work and ephemera.', 'blank-canvas' ) . '</em></p>
									<!-- /wp:paragraph -->

									<!-- wp:separator {"customColor":"#959595","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#959595;color:#959595"/>
									<!-- /wp:separator -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '“The Lost Tricycle” Book', 'blank-canvas' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '"Why we must own our history"', 'blank-canvas' ) . '</a>' . __( ' in <em>The Atlantic</em>', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '"Identity and Ownership"', 'blank-canvas' ) . '</a>' . __( ' in <em>The New York Times</em>', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( 'Sponsor: Crafty Cookies', 'blank-canvas' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( 'Donate to help keep us posting!', 'blank-canvas' ) . '</a></p>
									<!-- /wp:paragraph --></div></div>
									<!-- /wp:cover -->',
				)
			);
		}

		/**
		 * Unregister Seedlet Block Pattern Category.
		 */
		if ( function_exists( 'unregister_block_pattern_category' ) ) {
			unregister_block_pattern_category( 'seedlet' );
		}

		/**
		 * Unregister Block Patterns from Seedlet.
		 */
		if ( function_exists( 'unregister_block_pattern' ) ) {
			unregister_block_pattern( 'seedlet/group-split-background' );
			unregister_block_pattern( 'seedlet/group-image-overlap' );
			unregister_block_pattern( 'seedlet/latest-posts-alternating-grid' );
		}
	}
endif;
add_action( 'after_setup_theme', 'blank_canvas_register_block_patterns', 12 );
