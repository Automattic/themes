<?php
/**
 * Contact page block pattern
 */
return array(
	'title'      => __( 'Contact page', 'livre' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:heading {"level":1} -->
					<h1>' . esc_html__( 'Contact', 'livre' ) . '</h1>
					<!-- /wp:heading -->

					<!-- wp:columns {"verticalAlignment":null} -->
					<div class="wp-block-columns"><!-- wp:column {"width":""} -->
					<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">' . esc_html__( 'The studio was filled with the rich odour of roses, and when the light summer wind stirred amidst the trees of the garden.', 'livre' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"top":"1em","right":"1em","bottom":"1em","left":"1em"}}},"fontSize":"x-small"} -->
					<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a class="wp-block-button__link" style="padding-top:1em;padding-right:1em;padding-bottom:1em;padding-left:1em">' . esc_html__( 'Get in Touch', 'livre' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:spacer {"height":"16px"} -->
					<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":56,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chair.jpg" alt="' . esc_attr__( 'A vintage photograph of an elegant living room.', 'livre' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"bottom","width":""} -->
					<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"align":"right","fontSize":"small"} -->
					<p class="has-text-align-right has-small-font-size"><em>' . esc_html__( 'Follow us:', 'livre' ) . '</em></p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"iconColor":"secondary","iconColorValue":"var(--wp--preset--color--secondary)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
					<!-- /wp:social-links --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:group -->',
);
