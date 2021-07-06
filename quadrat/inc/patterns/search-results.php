<?php
/**
 * Search results
 *
 * @package Quadrat
 */

return array(
	'title'       => __( 'Search results', 'quadrat' ),
	'categories'  => array( 'quadrat' ),
	'content'     => '<!-- wp:group {"layout":{"inherit":true}, "className":"page-content"} -->
		<div class="wp-block-group page-content">

		<!-- wp:heading -->
		<h2>' . __('Results') . ':</h2>
		<!-- /wp:heading -->

		<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
		<!-- wp:query-loop -->

			<!-- wp:post-title {"level":5,"isLink":true} /-->
			<!-- wp:post-excerpt /-->

		<!-- /wp:query-loop -->
		<!-- /wp:query -->

		</div>
		<!-- /wp:group -->',
);
