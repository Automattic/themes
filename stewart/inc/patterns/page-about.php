<?php
/**
 * About page block pattern
 */
return array(
	'title'      => __( 'About page', 'stewart' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1","fontSize":"72px"}}} -->
					<p style="font-size:72px;line-height:1">' . wp_kses_post( __( 'Jenn<br>Stewart', 'stewart' ) ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1em"}}}} -->
					<div class="wp-block-group" style="padding-bottom:1em"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The artist: handsome, clever, and rich, with a comfortable home and happy disposition, seemed to unite some of the best blessings of existence; and had lived nearly twenty-one years in the world with very little to distress or vex her.', 'stewart' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/about.jpg" alt="' . esc_html__( 'A collage featuring the portrait of a woman.', 'stewart' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>' . esc_html__( 'Between them it was more the intimacy of sisters. Even before Miss Taylor had ceased to hold the nominal office of governess, the mildness of her temper had hardly allowed her to impose any restraint; and the shadow of authority being now long passed away.', 'stewart' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
);
