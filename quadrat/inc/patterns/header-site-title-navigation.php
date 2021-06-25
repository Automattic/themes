<?php
/**
 * Header with title and navigation.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Header with title and navigation', 'quadrat' ),
	'categories'    => array( 'page-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"align":"full","className":"alignfull are-vertically-aligned-center"} -->
					<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:33.33%"><!-- wp:site-title {"fontSize":"normal"} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"10px","right":"20px","bottom":"10px","left":"20px"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px;flex-basis:66.66%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"right","isResponsive":true} /--></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);