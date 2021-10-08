<?php
/**
 * Header, Description and Grid of Projects
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Header, Description and Grid of Projects', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:35%">

		<!-- wp:site-title /-->

		<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"300"}}} -->
		<h3 style="font-weight:300">' . esc_html__( 'Jonah is Creative Director of Hano, a production studio that specializes in combining storytelling with visual design.', 'videomaker' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:navigation {"orientation":"vertical","__unstableLocation":"primary"} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"10%"} -->
		<div class="wp-block-column" style="flex-basis:10%"><!-- wp:spacer -->
		<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'Man Working at Dawn', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'The Tale of The Three Cocktails', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/pacific.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'Is This The Pacific?', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'Boats', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'Plenty of Fish In The Sea', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/i-love-you.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
		<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/i-love-you.mp4"></video></figure>
		<!-- /wp:video -->

		<!-- wp:heading {"level":4} -->
		<h4>' . esc_html__( 'I Love You', 'videomaker' ) . '</h4>
		<!-- /wp:heading -->

		</div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->',
);
