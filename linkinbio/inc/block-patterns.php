<?php
/**
 * Block Patterns
 *
 * @package Link in Bio 
 * @since   1.0
 */

if ( ! function_exists( 'linkinbio_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns and unregisters Seedlet's.
	 */
	function linkinbio_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'linkinbio',
				array( 'label' => __( 'Link in Bio', 'linkinbio' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'linkinbio/links',
				array(
					'title'      => __( 'Links', 'linkinbio' ),
					'categories' => array( 'linkinbio' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									
									<!-- wp:image {"align":"center","id":20,"width":98,"height":95,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://s0.wp.com/wp-content/themes/pub/linkinbio/assets/pattern-hat.jpg" alt="Photo of a man wearing a hat." class="wp-image-20" width="98" height="95"/></figure></div>
									<!-- /wp:image -->
									
									<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="has-text-align-center" style="font-size:32px"><strong>Alex Fredrickson</strong></h1>
									<!-- /wp:heading -->
									
									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->
									
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
									
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->
									
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.65"}}} -->
									<p class="has-text-align-center" style="font-size:20px;line-height:1.65">My latest and greatest tips, resources, and reads.<br>So much goodness all in one place!</p>
									<!-- /wp:paragraph -->
									
									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">Must read: The Place That Made Me</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">Rain Journal by Richard Johnson</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">10th Day of Rain</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">Blurring the Lines Between Architecture and Nature</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"width":100,"className":"is-style-fill"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link">Instant Classic: A story of Persistence</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->',
				)
			);

			register_block_pattern(
				'linkinbio/emoji-links',
				array(
					'title'      => __( 'Emoji Links', 'linkinbio' ),
					'categories' => array( 'linkinbio' ),
					'content'    => '<!-- wp:cover {"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%)","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-dim has-background-gradient" style="background:linear-gradient(153deg,rgb(24,183,125) 0%,rgb(26,156,211) 49%,rgb(46,78,209) 100%);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									
									<!-- wp:image {"align":"center","id":36,"width":96,"height":96,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://s0.wp.com/wp-content/themes/pub/linkinbio/assets/pattern-links-hamburger.png" alt="Hamburger icon" class="wp-image-36" width="96" height="96"/></figure></div>
									<!-- /wp:image -->
									
									<!-- wp:heading {"textAlign":"center","level":1} -->
									<h1 class="has-text-align-center"><strong>Hamburger</strong></h1>
									<!-- /wp:heading -->
									
									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">📺  Subscribe on YouTube</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px"> 🎹  Listen on SoundCloud</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">📸  Follow my Instagram</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">🛍  Shop my style picks</a></div>
									<!-- /wp:button -->
									
									<!-- wp:button {"borderRadius":50,"backgroundColor":"background","textColor":"foreground","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-foreground-color has-background-background-color has-text-color has-background" style="border-radius:50px">🙋‍♀️  Ask me a question</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									
									<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer --></div></div>
									<!-- /wp:cover -->',
				)
			);

			register_block_pattern(
				'linkinbio/links-musician',
				array(
					'title'      => __( 'Musician Links', 'linkinbio' ),
					'categories' => array( 'linkinbio' ),
					'content'    => '<!-- wp:cover {"url":"' . get_stylesheet_directory_uri() . '/assets/pattern-links-gradient.jpg","id":181,"hasParallax":true,"dimRatio":0,"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-primary-background-color has-parallax" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-links-gradient.jpg);min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":10} -->
									<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:image {"align":"center","id":30,"width":120,"height":120,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-singer.png" alt="' . __( 'Image of a singer performing.', 'linkinbio' ) . '" class="wp-image-30" width="120" height="120"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
									<h1 class="has-text-align-center has-huge-font-size"><strong>' . __( 'Alex Smith — Own Way', 'linkinbio' ) . '</strong></h1>
									<!-- /wp:heading -->

									<!-- wp:embed {"url":"https://www.youtube.com/watch?v=_qX8CYToBbQ","type":"rich","providerNameSlug":"youtube","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
									<figure class="wp-block-embed is-type-rich is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
									https://www.youtube.com/watch?v=_qX8CYToBbQ
									</div></figure>
									<!-- /wp:embed -->

									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'SoundCloud', 'linkinbio' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Spotify', 'linkinbio' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Bandcamp', 'linkinbio' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Apple Music', 'linkinbio' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'YouTube', 'linkinbio' ) . '</a></div>
									<!-- /wp:button -->

									<!-- wp:button {"textColor":"background","width":50,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">' . __( 'Tidal', 'linkinbio' ) . '</a></div>
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
				'linkinbio/links-product',
				array(
					'title'      => __( 'Product Links', 'linkinbio' ),
					'categories' => array( 'linkinbio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","id":57,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-sunglasses.jpg" alt="' . __( 'Woman wearing sunglasses', 'linkinbio' ) . '" class="wp-image-57" width="150" height="150"/></figure></div>
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
									<p>' . __( 'Rhinestone Earrings, ASOS', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$36', 'linkinbio' ) . '</a></div>
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
									<p>' . __( 'Pink Long Sleeve Tea Dress, Topshop', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$45', 'linkinbio' ) . '</a></div>
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
									<p>' . __( 'Chunky Platform Lace-Up Boots, H&amp;M', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$60', 'linkinbio' ) . '</a></div>
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
									<p>' . __( 'Oversized Alpaca Crew, Everlane', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->

									<!-- wp:column {"verticalAlignment":"center"} -->
									<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right"} -->
									<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"primary","width":100} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background">' . __( '$70', 'linkinbio' ) . '</a></div>
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
				'linkinbio/links-text',
				array(
					'title'      => __( 'Text Links', 'linkinbio' ),
					'categories' => array( 'linkinbio' ),
					'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
									<div class="wp-block-cover alignfull has-background-background-color has-background-dim" style="min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"left","id":100,"width":100,"height":100,"sizeSlug":"large","linkDestination":"none"} -->
									<div class="wp-block-image"><figure class="alignleft size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-links-logo.png" alt="' . __( 'A logo of a circle with a line through it.', 'linkinbio' ) . '" class="wp-image-100" width="100" height="100"/></figure></div>
									<!-- /wp:image -->

									<!-- wp:spacer {"height":1} -->
									<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->

									<!-- wp:heading {"textAlign":"left","level":1} -->
									<h1 class="has-text-align-left">' . __( 'Patricia Jones', 'linkinbio' ) . '</h1>
									<!-- /wp:heading -->

									<!-- wp:paragraph -->
									<p><em>' . __( 'Published work and ephemera.', 'linkinbio' ) . '</em></p>
									<!-- /wp:paragraph -->

									<!-- wp:separator {"customColor":"#959595","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#959595;color:#959595"/>
									<!-- /wp:separator -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '“The Lost Tricycle” Book', 'linkinbio' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '"Why we must own our history"', 'linkinbio' ) . '</a>' . __( ' in <em>The Atlantic</em>', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( '"Identity and Ownership"', 'linkinbio' ) . '</a>' . __( ' in <em>The New York Times</em>', 'linkinbio' ) . '</p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( 'Sponsor: Crafty Cookies', 'linkinbio' ) . '</a></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph -->
									<p><a href="#">' . __( 'Donate to help keep us posting!', 'linkinbio' ) . '</a></p>
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
add_action( 'after_setup_theme', 'linkinbio_register_block_patterns', 12 );
