
<?php
/**
 * Block Patterns
 *
 * @package Quadrat 
 * @since   1.0
 */

if ( ! function_exists( 'quadrat_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns and unregisters Seedlet's.
	 */
	function quadrat_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'quadrat',
				array( 'label' => __( 'Quadrat', 'quadrat' ) )
			);

		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'blank-canvas/about-me',
				array(
					'title'      => __( 'About Me', 'quadrat' ),
					'categories' => array( 'blank-canvas' ),
					'content'    => '<!-- wp:spacer {"height":20} -->
									<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
									<!-- /wp:spacer -->
									<!-- wp:media-text {"mediaPosition":"right","mediaId":1752,"mediaLink":"' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg' ) . '","mediaType":"image","imageFill":true} -->
									<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg' ) . ');background-position:50% 50%"><img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/pattern-tattoo.jpg' ) . '" alt="' . esc_attr__( 'A photo of a tattooed hand, giving the "I love you" sign.', 'blank-canvas' ) . '" class="wp-image-1752 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"32px"}}} -->
									<h1 class="alignwide" style="font-size:32px"><strong>' . esc_html__( 'Hi! I’m a tattooist based in Florida City.', 'blank-canvas' ) . '</strong></h1>
									<!-- /wp:heading -->
									<!-- wp:paragraph -->
									<p>' . esc_html__( 'Specializing in fine line tattoos with a single needle. With over 10 years of experience, I can make your tattoo dreams come true.', 'blank-canvas' ) . '</p>
									<!-- /wp:paragraph -->
									<!-- wp:buttons -->
									<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#d35069"}},"textColor":"background"} -->
									<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-text-color has-background" style="background-color:#d35069">' . esc_html__( 'Get in touch', 'blank-canvas' ) . '</a></div>
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
		}
	}
endif;