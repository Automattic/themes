<?php
/**
 * Header with two navigation areas.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Header with two navigation areas and logo', 'quadrat' ),
	'categories'    => array( 'page-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
					<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right"} /--></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","width":"120px","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:40px;padding-bottom:40px;flex-basis:120px"><!-- wp:site-logo {"align":"center","width":80,"className":"is-style-rounded"} /--></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"left"} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);