<?php
/**
 * Footer with 3 columns
 *
 * @package Blockbase
 */

return array(
	'title'      => __( 'Footer with 3 columns', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
	<div class="wp-block-group">
		
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"className":"pre-footer"} -->
		<div class="wp-block-group alignwide pre-footer" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->

		<!-- wp:site-tagline {"fontSize":"small"} /-->

		<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--foreground)","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://twitter.com","service":"twitter"} /-->

		<!-- wp:social-link {"url":"http://facebook.com","service":"facebook"} /-->

		<!-- wp:social-link {"url":"http://instagram.com","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px"}}} -->
		<h3 style="font-size:14px;"><strong>' . esc_html__( 'More info', 'blockbase' ) . '</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}}} -->
		<h3 style="text-transform:uppercase;font-size:14px"><strong>' . esc_html__( 'Search', 'blockbase' ) . '</strong></h3><!-- /wp:heading --><!-- wp:search {"label":"' . esc_html__( 'Search', 'blockbase' ) . '","showLabel":false,"buttonText":"' . esc_html__( 'Search', 'blockbase' ) . '","buttonPosition":"button-inside"} /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
	
		<!-- wp:group {"className":"site-footer","style":{"spacing":{"padding":{"bottom":"30px"}}}} -->
		<div class="wp-block-group site-footer" style="padding-bottom: 30px">
	
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--tiny)"}}} -->
		<p class="has-text-align-center" style="font-size:var(--wp--custom--font-sizes--tiny)">Proudly Powered by <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
		<!-- /wp:paragraph -->
	
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->',
);
