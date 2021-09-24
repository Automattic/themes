<?php
/**
 * Blog posts with hover effect.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'List of blog posts', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'blockTypes' => array( 'core/query' ),
	'content'    => '<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide","className":"is-style-quadrat-diamond-posts"} -->
	<div class="wp-block-query alignwide is-style-quadrat-diamond-posts"><!-- wp:post-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"post-meta","layout":{"type":"flex"}} -->
	<div class="wp-block-group post-meta"><!-- wp:post-date {"fontSize":"tiny","isLink":true} /-->

	<!-- wp:post-terms {"term":"category","fontSize":"tiny"} /--></div>
	<!-- /wp:group -->

	<!-- wp:post-title {"textAlign":"left","isLink":true,"fontSize":"extra-large"} /-->

	<!-- wp:post-excerpt {"moreText":"Read more","fontSize":"normal"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:post-featured-image /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"align":"wide","paginationArrow":"arrow"} -->
	<div class="wp-block-query-pagination alignwide"><!-- wp:query-pagination-previous /-->
	<!-- wp:query-pagination-numbers /-->
	<!-- wp:query-pagination-next /--></div>
	<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:query -->',
);
