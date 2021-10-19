<?php
/**
 * Pattern: Offset Project Grid
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Pattern: Offset Project Grid', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:group -->
	<div class="wp-block-group">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Man Working at Dawn', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:spacer {"height":290} -->
	<div style="height:290px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:group -->
	<div class="wp-block-group">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Boats', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":65} -->
	<div style="height:65px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%">

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:group -->
	<div class="wp-block-group">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'The Tale Of Three Cocktails', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:spacer {"height":385} -->
	<div style="height:385px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/pacific.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/pacific.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:group --><div class="wp-block-group">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Is This The Pacific?', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">
	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4"></video></figure>
	<!-- /wp:video -->


	<!-- wp:group -->
	<div class="wp-block-group">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Plenty of Fish In The Sea', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->'
);
