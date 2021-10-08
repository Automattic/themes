<?php
/**
 * Post: I Love You
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Post: I Love You', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/i-love-you.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video src="' . get_stylesheet_directory_uri() . '/assets/videos/i-love-you.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:post-terms {"term":"post_tag"} /-->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . esc_html__( 'As nations under the present system are driven to compete with one another for the markets of the world, and as firms or the captains of industry have to scramble for their share of the profits of the markets, so also have the workers to compete with each other—for livelihood.', 'videomaker' ) . '<br><br>—<br><br><strong>' . esc_html__( 'Direction', 'videomaker' ) . '</strong><br>' . esc_html__( 'Dan Andrews', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Screenplay', 'videomaker' ) . '</strong><br>' . esc_html__( 'Augusta Smith', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Actors', 'videomaker' ) . '</strong><br>' . esc_html__( 'Akachukwu Elba', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Camera', 'videomaker' ) . '</strong><br>' . esc_html__( 'Diego Cruz, Helen Smith-Andrews and Dan Andrews', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Art', 'videomaker' ) . '</strong><br>' . esc_html__( 'Philip Mizrahi', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Production', 'videomaker' ) . '</strong><br>' . esc_html__( 'Romana Arakelyan', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Operators', 'videomaker' ) . '</strong><br>' . esc_html__( 'Syd Wyatt and Cameron Madeira', 'videomaker' ) . '<br>' . esc_html__( 'Behind the Camera: Diego Cruz', 'videomaker' ) . '<br><br><strong>' . esc_html__( 'Color Editing and Post-Production', 'videomaker' ) . '<br></strong>' . esc_html__( 'Philip Mizrahi and Tony Sánchez', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->',
);
