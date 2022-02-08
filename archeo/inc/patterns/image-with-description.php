<?php
/**
 * Image with description
 */
return array(
	'title'      => __( 'Image with description', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph -->
	<p>Ancien Temple, à Chichen-Itza, applé le chateau</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="font-style:italic;font-weight:400">From “Cités et Ruines Americaines: Mitla, Palenqué, Izamal, Chichen-Itza, Uxmal, Atlas” housed at the New York Public Library.</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:image {"id":840,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="http://localhost:4759/wp-content/uploads/2022/02/ancien-temple.jpg" alt="" class="wp-image-840"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
