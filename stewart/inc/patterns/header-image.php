<?php
/**
 * Header image block pattern
 */
return array(
	'title'      => __( 'Header image', 'stewart' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image alignfull size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/header.jpg" alt="' . esc_html__( 'An abstract image featuring a brushstroke.', 'stewart' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->',
);
