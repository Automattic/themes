<?php
/**
 * Layered images with headline
 */
return array(
	'title'      => __( 'Layered images with headline', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/palais-du-cirque.jpg","dimRatio":85,"overlayColor":"background","contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0vw","left":"7vw"}}}} -->
	<div class="wp-block-cover alignfull is-light" style="padding-top:0px;padding-right:0px;padding-bottom:0vw;padding-left:7vw"><span aria-hidden="true" class="has-background-background-color has-background-dim-90 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="' . esc_attr__( 'Photo of Palais Du Cirque', 'archeo' ) . '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/palais-du-cirque.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:spacer {"height":"14vw"} -->
	<div style="height:14vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"300"}},"fontSize":"huge"} -->
	<p class="has-huge-font-size" style="font-style:normal;font-weight:300;text-transform:uppercase">' . wp_kses_post( __( 'Palais Du <br>Cirque, à Chichen-Itza, bas-relief<br>des tigres.', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"top"} -->
	<div class="wp-block-column is-vertically-aligned-top"><!-- wp:spacer {"height":"8vw"} -->
	<div style="height:8vw" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:image {"align":"right","sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="alignright size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/palais-du-cirque.jpg" alt="' . esc_attr__( 'Photo of Palais Du Cirque', 'archeo' ) . '"/></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div>
	<!-- /wp:cover -->',
);