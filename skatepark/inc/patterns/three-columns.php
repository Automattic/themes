<?php
/**
 * Three columns
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Footer with 3 columns', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}}} -->
		<div class="wp-block-group alignwide pre-footer" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->

		<!-- wp:site-tagline {"fontSize":"small"} /-->

		<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

		<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

		<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px"}}} -->
		<h3 style="font-size:14px;"><strong>' . esc_html__( 'More info', 'skatepark' ) . '</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"overlayBackgroundColor":"foreground","overlayTextColor":"background","fontSize":"small"} -->
			<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
		<!-- /wp:navigation -->
		
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}}} -->
		<h3 style="text-transform:uppercase;font-size:14px"><strong>' . esc_html__( 'Search', 'skatepark' ) . '</strong></h3><!-- /wp:heading --><!-- wp:search {"label":"' . esc_html__( 'Search', 'skatepark' ) . '","showLabel":false,"buttonText":"' . esc_html__( 'Search', 'skatepark' ) . '","buttonPosition":"button-inside"} /--></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
