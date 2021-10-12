<?php
/**
 * Authors
 *
 * @package Zoologist
 */

return array(
	'title'      => __( 'Authors', 'zoologist' ),
	'categories' => array( 'zoologist' ),
	'blockTypes' => array( 'core/post-author' ),
	'content'    => '<!-- wp:paragraph -->
	<p>' . esc_html__( 'About the Authors:', 'zoologist' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>' . esc_html__( 'Sarah Edwards', 'zoologist' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Sarah is a zoologist at Anthem State University. Her love for all things underground was sparked in Kindergarten when she unearthed a toy that someone left buried in the sandbox.', 'zoologist' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#F5F0E5","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"wordpress.com","service":"wordpress"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>' . esc_html__( 'Angelo Ortiz', 'zoologist' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Angelo is an independent researcher and hobbyist. His collection of gemstones rivals that of some museums. Angelo is always on the lookout for a new discovery, and carries his toolkit everywhere.', 'zoologist' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#F5F0E5","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->',
);
