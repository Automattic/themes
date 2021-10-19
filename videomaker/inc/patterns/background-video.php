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
	<!-- wp:navigation {"itemsJustification":"right","isResponsive":true,"__unstableLocation":"primary"} /-->
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

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_stylesheet() . '"} /-->

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
