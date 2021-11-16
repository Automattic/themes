<?php
/**
 * A 404 page
 *
 * @package Blockbase 
 */

return array(
	'title'      => __( '404-prompt', 'blockbase' ),
	'categories' => array( 'blockbase' ),
	'content'    => '<!-- wp:group {"tagName":"main","className":"container-404"} -->
<main class="wp-block-group container-404"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"medium"} -->
<h1 class="has-text-align-center has-medium-font-size" id="oops-that-page-can-t-be-found">' . esc_html__( "Oops! That page can&rsquo;t be found.", "blockbase" ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( "It looks like nothing was found at this location. Maybe try a search?", "blockbase" ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":""} /--></main>
<!-- /wp:group -->',
);
