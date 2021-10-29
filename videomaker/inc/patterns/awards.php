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
	<div class="wp-block-cover alignwide has-background-background-color has-background-dim" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px;min-height:100vh"><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"70px"}}} -->
	<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/best_act.png" alt="' . esc_attr__( 'Best Act - Nominated', 'videomaker' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/new_film.png" alt="' . esc_attr__( 'New Film Festival', 'videomaker' ) . '" /></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":52,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . get_stylesheet_directory_uri() . '/assets/images/best_short.png" alt="" class="wp-image-52"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);
