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
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video autoplay loop muted src="' . get_stylesheet_directory_uri() . '/assets/videos/i-love-you.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:post-terms {"term":"post_tag"} /-->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">As nations under the present system are driven to compete with one another for the markets of the world, and as firms or the captains of industry have to scramble for their share of the profits of the markets, so also have the workers to compete with each other—for livelihood.<br><br>—<br><br><strong>Direction</strong><br>Dan Andrews<br><br><strong>Screenplay</strong><br>Augusta Smith<br><br><strong>Actors</strong><br>Akachukwu Elba<br><br><strong>Camera</strong><br>Diego Cruz, Helen Smith-Andrews and Dan Andrews<br><br><strong>Art</strong><br>Philip Mizrahi<br><br><strong>Production</strong><br>Romana Arakelyan<br><br><strong>Operators</strong><br>Syd Wyatt and Cameron Madeira<br>Behind the Camera: Diego Cruz<br><br><strong>Color Editing and Post-Production<br></strong>Philip Mizrahi and Tony Sánchez</p>
	<!-- /wp:paragraph -->',
);
