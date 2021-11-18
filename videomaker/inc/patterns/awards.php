<?php
/**
 * Awards.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Awards', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","align":"wide","style":{"spacing":{"padding":{"top":"50px","right":"50px","bottom":"50px","left":"50px"}}}} -->
	<div class="wp-block-cover alignwide has-background-background-color has-background-dim" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px;min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
		
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
			<!-- /wp:image -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium","style":{"typography":{"lineHeight":"1"}}} -->
			<p class="has-text-align-center has-medium-font-size" style="line-height:1"><strong>' . esc_html__( '\'Best Film\'', 'videomaker' ) . '</strong></p>
			<!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p class="has-text-align-center" style="margin-top:0">' . esc_html__( 'Winner', 'videomaker' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->
		
		
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
			<!-- /wp:image -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}},"typography":{"letterSpacing":"-0.13em","lineHeight":"1"}},"fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size" style="line-height:1;margin-top:0;letter-spacing:-0.13em"><strong>' . esc_html__( 'NFF', 'videomaker' ) . '</strong></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}},"typography":{"lineHeight":"1"}}} -->
			<p class="has-text-align-center" style="line-height:1;margin-top:0">' . wp_kses_post( __( 'NEW FILM <br> FESTIVAL', 'videomaker' ) ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
	
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"20px","right":"0px","bottom":"20px","left":"0px"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
			
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_left.png" alt=""/></figure>
			<!-- /wp:image -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","fontSize":"medium","style":{"typography":{"lineHeight":"1"}}} -->
			<p class="has-text-align-center has-medium-font-size" style="line-height:1"><strong>' . esc_html__( '\'Best Short\'', 'videomaker' ) . '</strong></p>
			<!-- /wp:paragraph --><!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p class="has-text-align-center" style="margin-top:0">' . esc_html__( 'Winner', 'videomaker' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
			
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/laurel_right.png" alt=""/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column -->
		
		</div>
		<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);
