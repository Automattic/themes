<?php
/**
 * Description.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Description', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size">' . esc_html__( 'Working at Dawn', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
	<p class="has-text-align-right has-medium-font-size">' . wp_kses_post( __( '<strong>Release Date<br>Rating</strong><br><br><strong>Year<br>Country<br>Slogan<br>Genre<br>Time<br>Budget<br>Age</strong>', 'videomaker' ) ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"medium"} -->
	<p class="has-medium-font-size">' . wp_kses_post( __( '25th March 2020<br>PG-13<br><br>2016<br>United States of America<br>“A Life of Labor”<br>Short Film, Documentary<br>35 min.<br>$ 450 000<br>12+', 'videomaker' ) ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);
