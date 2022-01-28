<?php
/**
 * Contact page block pattern
 */
return array(
	'title'      => __( 'Contact page', 'stewart' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/contact.jpg" alt="' . esc_html__( 'An abstract image featuring a brushstroke.', 'stewart' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false} -->
					<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"100px"} -->
					<div class="wp-block-column" style="flex-basis:100px"><!-- wp:paragraph -->
					<p>' . esc_html__( 'Twitter', 'stewart' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Email', 'stewart' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>' . esc_html__( 'Instagram', 'stewart' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p><a href="#">' . esc_html__( '@twitter', 'stewart' ) . '</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#">' . esc_html__( 'email@example.com', 'stewart' ) . '</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#">' . esc_html__( '@instagram', 'stewart' ) . '</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The artist: handsome, and clever, with a comfortable home and happy disposition, seemed to unite some of the best blessings of existence; and had lived nearly twenty-one years in the world with very little to distress or vex her.', 'stewart' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);
