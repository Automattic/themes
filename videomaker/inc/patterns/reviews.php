<?php
/**
 * Reviews.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Reviews', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><em>' . esc_html__( '“Han’s newest short film is an absurdly and assuredly packed punch in the gut that’s short, shocking, and, incidentally, a romantic view on underdeveloped coutries.”', 'videomaker' ) . '</em></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong>' . esc_html__( '— Latest Review', 'videomaker' ) . '</strong></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size"><em>' . esc_html__( '“The film is beautifully shot and captures the picturesque African savannah, with the memorable image of a man working at dawn, creating a striking contrast between nature and humankind.”', 'videomaker' ) . '</em></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong>' . esc_html__( '— The Newspaper', 'videomaker' ) . '</strong></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->

		<!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->',
);
