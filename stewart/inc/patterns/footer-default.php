<?php
/**
 * Default footer block pattern
 */
return array(
	'title'      => __( 'Default footer', 'stewart' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:spacer {"height":60} -->
					<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
						<p class="has-text-align-center has-small-font-size">' .
						sprintf(
							/* Translators: WordPress link. */
							esc_html__( 'Proudly powered by %s', 'stewart' ),
							'<a href="' . esc_url( __( 'https://wordpress.org', 'stewart' ) ) . '" rel="nofollow">WordPress</a>'
						) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":60} -->
					<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->',
);
