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
									<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg);background-position:50% 50%"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg" alt="' . __( 'A photo of a tattooed hand, giving the "I love you" sign.', 'blank-canvas' ) . '" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"align":"wide"} -->
									<h2 class="alignwide"><strong>' . __( 'Hi! I’m a tattooist based in Florida City.', 'blank-canvas' ) . '</strong></h2>
									<!-- /wp:heading -->
									<!-- wp:paragraph -->
									<p>' . __( 'Specializing in fine line tattoos with a single needle. With over 10 years of experience, I can make your tattoo dreams come true.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#d34f7e"}},"textColor":"background"} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#d34f7e">' . __( 'Get in touch', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->
									<!-- wp:social-links {"className":"is-style-default"} -->
									<ul class="wp-block-social-links is-style-default"><!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /--></ul>
									<!-- /wp:social-links --></div></div>
									<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'blank-canvas/links',
				array(
					'title'      => __( 'Links', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:image {"align":"center","id":20,"width":98,"height":95,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
									<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-hat.jpg" alt="' . __( 'A photo of a man wearing a hat.', 'blank-canvas' ) . '" class="wp-image-20" width="98" height="95"/></figure></div>
									<!-- /wp:image -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"34px","lineHeight":"1"}}} -->
									<p class="has-text-align-center" style="font-size:34px;line-height:1"><strong>' . __( 'Alex Fredrickson', 'blank-canvas' ) . '</strong></p>
									<!-- /wp:paragraph -->
									<!-- wp:social-links {"align":"center","className":"is-style-default"} -->
									<ul class="wp-block-social-links aligncenter is-style-default"><!-- wp:social-link {"url":"https://linkedin.com/","service":"linkedin"} /-->
									<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
									<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
									<!-- /wp:social-links -->
									<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":"1.65"}}} -->
									<p class="has-text-align-center" style="font-size:20px;line-height:1.65">' . __( 'My latest and greatest tips, resources, and reads.<br>So much goodness all in one place!', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons {"contentJustification":"center"} -->
									<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . __( 'Must read: The Place That Made Me', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->
									<!-- wp:button {"width":100,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . __( 'Rain Journal by Richard Johnson', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->
									<!-- wp:button {"width":100,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . __( '10th Day of Rain', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->
									<!-- wp:button {"width":100,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . __( 'Blurring the Lines Between Architecture and Nature', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button -->
									<!-- wp:button {"width":100,"className":"is-style-outline"} -->
									<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link">' . __( 'Instant Classic: A story of Persistence', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons -->',
				)
			);

			register_block_pattern(
				'blank-canvas/invitation',
				array(
					'title'      => __( 'Invitation', 'blank-canvas' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:media-text {"mediaId":2207,"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg","mediaType":"image","verticalAlignment":"center","style":{"color":{"background":"#fff9df"}}} -->
									<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#fff9df"><figure class="wp-block-media-text__media"><img src="' . get_stylesheet_directory_uri() . '/assets/pattern-drink.jpg" alt="' . __( 'Two Drinks', 'blank-canvas' ) . '" class="wp-image-2207 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading -->
									<h2>' . __( 'You&rsquo;re Invited', 'blank-canvas' ) . '</h2>
									<!-- /wp:heading -->
									<!-- wp:columns -->
									<div class="wp-block-columns"><!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( '123 Demo Street<br>New York, NY', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column -->
									<!-- wp:column -->
									<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
									<p class="has-small-font-size">' . __( '8pm–12am<br>February 24th', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph --></div>
									<!-- /wp:column --></div>
									<!-- /wp:columns -->
									<!-- wp:separator {"customColor":"#eed99f","className":"is-style-wide"} -->
									<hr class="wp-block-separator has-text-color has-background is-style-wide" style="background-color:#eed99f;color:#eed99f"/>
									<!-- /wp:separator -->
									<!-- wp:paragraph -->
									<p>' . __( 'We&rsqo;ll be mixing tiki classics and some new creations using top-shelf spirits and organic mixers.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:paragraph -->
									<p>' . __( 'Not a drinker? Not to worry—we&rsquo;ll have a full menu of delicious mocktails on offer.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#357b00"}},"textColor":"background","className":"is-style-fill"} -->
									<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#357b00">' . __( 'RSVP', 'blank-canvas' ) . '</a></div>
									<!-- /wp:button --></div>
									<!-- /wp:buttons --></div></div>
									<!-- /wp:media-text -->',
				)
			);
		}

		/**
		 * Unregister SeedletBlock Pattern Category.
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
