<?php
/**
 * Header with social links.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Header with social links', 'quadrat' ),
	'categories'    => array( 'page-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
					<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:navigation {"orientation":"horizontal","itemsJustification":"left","isResponsive":true} /--></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:site-title {"textAlign":"center"} /--></div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:social-links {"iconColor":"pink","iconColorValue":"#FFD1D1","className":"items-justified-right is-style-logos-only"} -->
					<ul class="wp-block-social-links has-icon-color items-justified-right is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
					<!-- wp:social-link {"url":"#","service":"mail"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);