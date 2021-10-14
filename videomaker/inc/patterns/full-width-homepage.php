<?php
/**
 * Full-width Homepage
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Full-width Homepage', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"itemsJustification":"right","isResponsive":true,"__unstableLocation":"primary"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:video {"align":"wide","className":"wp-block-embed is-type-video is-provider-videopress"} -->
	<figure class="wp-block-video alignwide wp-block-embed is-type-video is-provider-videopress"><video controls src="' . get_stylesheet_directory_uri() . '/assets/videos/digging.mp4"></video></figure>
	<!-- /wp:video -->',
);
