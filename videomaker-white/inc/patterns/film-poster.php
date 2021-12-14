<?php
/**
 * Film poster.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Film poster', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"backgroundColor":"background"} -->
		<div class="wp-block-group alignwide has-background-background-color has-background" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:cover {"url":"' . get_stylesheet_directory_uri() . '/assets/images/working_at_dawn.jpg","dimRatio":0,"overlayColor":"background","minHeight":1410,"minHeightUnit":"px","contentPosition":"center center","align":"wide","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
		<div class="wp-block-cover alignwide has-background-background-color" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;min-height:1410px"><img class="wp-block-cover__image-background" alt="" src="' . get_stylesheet_directory_uri() . '/assets/images/working_at_dawn.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","width":206,"height":105,"sizeSlug":"full","linkDestination":"none"} -->
		<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . get_stylesheet_directory_uri() . '/assets/images/new_film.png" alt="' . esc_attr__( 'Photo of a man working at dawn', 'videomaker' ) . '" width="206" height="105"/></figure></div>
		<!-- /wp:image -->

		<!-- wp:paragraph {"align":"center","textColor":"foreground","fontSize":"normal"} -->
		<p class="has-text-align-center has-normal-font-size has-foreground-color has-text-color"><em>' . esc_html__( '“Absurdly and assuredly packed punch in the gut.”', 'videomaker' ) . '</em></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"foreground","style":{"typography":{"fontSize":"12px"}}} -->
		<p class="has-text-align-center has-foreground-color has-text-color" style="font-size:12px"><strong>' . esc_html__( 'Latest Review', 'videomaker' ) . '</strong></p>
		<!-- /wp:paragraph -->

		<!-- wp:spacer {"height":500} -->
		<div style="height:500px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:paragraph {"align":"center","textColor":"foreground","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size has-foreground-color has-text-color" style="line-height:1.3">' . wp_kses_post( __( '<strong>MAN WORKING AT DAWN</strong>', 'videomaker' ) ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","textColor":"foreground","style":{"typography":{"lineHeight":"1"}}} -->
		<p class="has-text-align-center has-foreground-color has-text-color" style="line-height:1">' . wp_kses_post( __( 'A Film by <strong>Mary Han</strong>', 'videomaker' ) ) . '</p>
		<!-- /wp:paragraph --></div></div>
		<!-- /wp:cover -->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html__( 'AKACHUKWU ELBA', 'videomaker' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html__( 'VICTORIA EDEM', 'videomaker' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html__( 'MUSA IDOWU', 'videomaker' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">' . esc_html__( 'SANI GODWIN', 'videomaker' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"100%"} -->
		<div class="wp-block-column" style="flex-basis:100%"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"12px"}}} -->
		<p class="has-text-align-center" style="font-size:12px">' . esc_html__( 'Videomaker Collective Presents In Association with HANO Direction by Amber Andrews Screenplay by Augusta Smith Camera Diego Cruz, Helen Smith-Andrews and Amber Andrews Art Philip Mizrahi Production Romana Arakelyan Operators Syd Wyatt and Cameron Madeira Behind the Camera Diego Cruz Color Editing and Post-Production Philip Mizrahi and Tony Sánchez Videomaker Collective Presents In Association with HANO Direction by Amber Andrews Screenplay by Augusta Smith Camera Diego Cruz, Helen Smith-Andrews and Amber Andrews Art Philip Mizrahi Production Romana Arakelyan Operators Syd Wyatt and Cameron Madeira Behind the Camera Diego Cruz Color Editing and Post-Production Philip Mizrahi and Tony Sánchez', 'videomaker' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
