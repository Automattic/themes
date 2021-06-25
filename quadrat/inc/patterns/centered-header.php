<?php
/**
 * Centered header.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Centered page header', 'quadrat' ),
	'categories'    => array( 'page-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
					<div class="wp-block-group alignfull" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:site-logo {"align":"center"} /-->

					<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontSize":"48px","textTransform":"capitalize","lineHeight":"1.1"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

					<!-- wp:site-tagline {"textAlign":"center"} /-->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:navigation {"orientation":"horizontal","itemsJustification":"center","isResponsive":true} /--></div>
					<!-- /wp:group -->',
);