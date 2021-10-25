<?php
/**
 * Background Video
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Background video', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"url":"' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4","dimRatio":40,"backgroundType":"video","minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}}} -->
	<div class="wp-block-cover alignfull has-background-dim-40 has-background-dim" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:100vh"><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center">
	<!-- wp:navigation {"itemsJustification":"right","isResponsive":true,"__unstableLocation":"primary","style":{"typography":{"textTransform":"uppercase"}}} /-->
	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"90%"} -->
	<div class="wp-block-column" style="flex-basis:90%">
	<!-- wp:post-title /-->

	<!-- wp:group {"className":"post-meta","layout":{"type":"flex"},"style":{"spacing":{"padding":{"top":"var(--wp--style--block-gap,1em)","bottom":"var(--wp--style--block-gap,1em)"}}}} -->
	<div class="wp-block-group post-meta" style="padding-top:var(--wp--style--block-gap,1em);padding-bottom:var(--wp--style--block-gap,1em)">
		<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--tiny)"}}} /-->
		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--tiny)"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"post-tags-container"} -->
	<div class="wp-block-group post-tags-container">
		<!-- wp:post-terms {"term": "post_tag","style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--tiny)"}}} /-->
	</div>
	<!-- /wp:group -->


	</div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);
