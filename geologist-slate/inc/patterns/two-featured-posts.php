<?php
/**
 * Two posts with features images in a query block.
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Two featured posts', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
	<div class="wp-block-query"><!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true} /-->

	<!-- wp:post-title {"isLink":true} /-->

	<!-- wp:post-excerpt /-->

	<!-- wp:post-date /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query -->',
);
