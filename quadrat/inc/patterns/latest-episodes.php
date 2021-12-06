<?php
/**
 * Latest Episodes.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Latest Episodes', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:30px"><!-- wp:image {"id":1438,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
	<figure class="wp-block-image size-large image-no-margin mb-0"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/screen-usage.jpeg" alt="' . esc_attr__( 'Illustration of a woman working on a laptop.', 'quadrat' ) . '" class="wp-image-1438"/></figure>
	<!-- /wp:image -->

	<!-- wp:cover {"overlayColor":"tertiary","minHeight":360,"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"30px","right":"40px","bottom":"20px","left":"40px"}}}} -->
	<div class="wp-block-cover has-tertiary-background-color has-background-dim" style="margin-top:0;padding-top:30px;padding-right:40px;padding-bottom:20px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"primary"} -->
	<h3 class="has-primary-color has-text-color">' . esc_html__( 'Episode 1: How Screens Affect Hormones', 'quadrat' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">' . esc_html__( 'In this episode, Sarah and Olivia talk with female hormone specialist Diana Roth about the impact that gadgets and technology have on hormone and fertility health.', 'quadrat' ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:30px"><!-- wp:image {"id":1439,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
	<figure class="wp-block-image size-large image-no-margin mb-0"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/leadership.jpeg" alt="' . esc_attr__( 'Illustration of a woman climbing steps.', 'quadrat' ) . '" class="wp-image-1439"/></figure>
	<!-- /wp:image -->

	<!-- wp:cover {"overlayColor":"tertiary","minHeight":360,"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"30px","right":"40px","bottom":"20px","left":"40px"}}}} -->
	<div class="wp-block-cover has-tertiary-background-color has-background-dim" style="margin-top:0;padding-top:30px;padding-right:40px;padding-bottom:20px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"primary"} -->
	<h3 class="has-primary-color has-text-color">' . esc_html__( 'Episode 2: Female Leaders, Where Are They?', 'quadrat' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">' . esc_html__( 'After years of revolution, the big question remains: why aren’t there more women in leadership? Sarah and Olivia get deep into the subject.', 'quadrat' ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column --></div>
	<!-- /wp:group --></div>
	<!-- /wp:columns -->',
);
