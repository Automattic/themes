<?php
/**
 * Authors
 *
 * @package Geologist
 */

return array(
	'title'      => __( 'Authors', 'geologist' ),
	'categories' => array( 'geologist' ),
	'blockTypes' => array( 'core/post-author' ),
	'content'    => '<!-- wp:paragraph -->
	<p>' . esc_html__( 'About the Authors:' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:post-author {"showAvatar":false,"showBio":true,"fontSize":"extra-large"} /--></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:post-author {"showAvatar":false,"showBio":true,"fontSize":"extra-large"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
