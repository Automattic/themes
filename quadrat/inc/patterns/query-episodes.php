<?php
/**
 * Latest three episodes.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Latest three episodes', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":"2","pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"vertical-query-pattern","layout":{"inherit":false}} -->
	<div class="wp-block-group vertical-query-pattern" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"className":"image-no-margin mb-0"} /-->

	<!-- wp:cover {"overlayColor":"tertiary","minHeight":360,"className":"mt-0","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"20px","left":"40px"}}}} -->
	<div class="wp-block-cover has-tertiary-background-color has-background-dim mt-0" style="padding-top:30px;padding-right:40px;padding-bottom:20px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container"><!-- wp:post-title {"isLink":true,"linkTarget":"_blank","textColor":"primary"} /-->

	<!-- wp:post-excerpt {"textColor":"primary","fontSize":"small"} /--></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:group -->
	<!-- /wp:post-template --></div>
	<!-- /wp:query -->
	<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":"2","postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->

	<!-- wp:group {"className":"horizontal-query-pattern","layout":{"type":"flex"}} -->
	<div class="wp-block-group horizontal-query-pattern">

	<!-- wp:post-featured-image {"className":"image-no-margin mb-0"} /-->

	<!-- wp:cover {"className":"horizontal-query-pattern","overlayColor":"tertiary","minHeight":360,"className":"mt-0","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"30px","left":"40px"}}}} -->
	<div class="wp-block-cover has-tertiary-background-color has-background-dim mt-0 horizontal-query-pattern" style="padding-top:30px;padding-right:40px;padding-bottom:30px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container">
	<!-- wp:post-title {"isLink":true,"linkTarget":"_blank","textColor":"primary"} /-->
	<!-- wp:post-excerpt {"textColor":"primary","fontSize":"small"} /--></div></div>
	<!-- /wp:cover -->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template --></div>
	<!-- /wp:query -->',
);
