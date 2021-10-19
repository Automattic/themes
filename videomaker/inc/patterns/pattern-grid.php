<?php
/**
 * Pattern: Grid
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Pattern: Grid', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Man Working at Dawn', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/cocktails.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'The Tale of The Three Cocktails', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/boats.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Boats', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	<!-- wp:video {"src":"' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4","videoPressClassNames":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4"></video></figure>
	<!-- /wp:video -->

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Plenty of Fish In The Sea', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:template-part {"slug":"post-meta","theme":"' . get_template() . '"} /-->

	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
