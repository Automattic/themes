<?php
/**
 * Full width image with aside caption.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Full width image with aside caption', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":["#000","#BFF5A5"]},"border":{"radius":"0px"}}} -->
	<figure class="wp-block-image alignfull size-large" style="border-radius:0px"><img src="https://skateparkdemo.files.wordpress.com/2021/08/stocksnap_5otfjyvyse.jpg" alt=""/></figure>
	<!-- /wp:image -->
	
	<!-- wp:columns {"align":"wide","className":"aside-caption"} -->
	<div class="wp-block-columns alignwide aside-caption"><!-- wp:column -->
	<div class="wp-block-column"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"455px"} -->
	<div class="wp-block-column" style="flex-basis:455px"><!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">Learn the basics of skating along with a group of your peers. More advanced at skating? Our skateboarding coaches will work with you 1:1 to advance your technique.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
