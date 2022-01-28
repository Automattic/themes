<?php
/**
 * Sidebar with categories and tags block pattern
 */
return array(
	'title'      => __( 'Sidebar with categories and tags', 'stewart' ),
	'categories' => array( 'sidebar' ),
	'content'    => '<!-- wp:group {"fontSize":"small"} -->
					<div class="wp-block-group has-small-font-size"><!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"fontSize":"small"} -->
					<h2 class="has-small-font-size">' . esc_html__( 'Categories', 'stewart' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:categories /-->

					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:heading {"fontSize":"small"} -->
					<h2 class="has-small-font-size">' . esc_html__( 'Tags', 'stewart' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:tag-cloud /-->

					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator --></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":"80px"} -->
					<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->',
);
