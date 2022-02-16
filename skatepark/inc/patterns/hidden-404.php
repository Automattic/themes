<?php
/**
 * A 404 page
 *
 * @package Skatepark
 */

return array(
	'title'      => __( '404', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'inserter'   => false,
	'content'    => '<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"medium"} -->
<h1 class="has-text-align-center has-medium-font-size" id="oops-that-page-can-t-be-found">' . esc_html__( "Oops! That page can&rsquo;t be found.", "skatepark" ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( "It looks like nothing was found at this location. Maybe try a search?", "skatepark" ) . '</p>
<!-- /wp:paragraph -->',
);
