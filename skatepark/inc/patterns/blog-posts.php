<?php
/**
 * Blog posts.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Blog posts', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
	<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:separator {"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:post-featured-image {"style":{"color":{"duotone":["#000","#B9FB9C"]}}} /-->
	
	<!-- wp:post-title {"isLink":true,"fontSize":"normal"} /-->
	
	<!-- wp:post-excerpt {"className":"is-style-indented-post-excerpt"} /-->
	
	<!-- wp:post-date {"style":{"typography":{"fontWeight":"500"}},"fontSize":"tiny"} /--></div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination -->
	<div class="wp-block-query-pagination"><!-- wp:query-pagination-previous /-->
	
	<!-- wp:query-pagination-numbers /-->
	
	<!-- wp:query-pagination-next /--></div>
	<!-- /wp:query-pagination --></div>
	<!-- /wp:query -->',
);
