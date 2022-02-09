<?php
/**
 * Image with description and right-aligned headline
 */
return array(
	'title'      => __( 'Image with description and right-aligned headline', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"overlayColor":"background","minHeight":670,"contentPosition":"bottom center","isDark":false} -->
	<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="min-height:670px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="has-large-font-size" id="palais-du-gouverneur-a-uxmal-detail-de-la-porte-principale-1">' . esc_html__( 'Palais Du Gouverneur, à Uxmal, detail de la Porte Principale', 'archeo' ). '</h3>
	<!-- /wp:heading --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/palais-du-gouverneur.png","id":1692,"dimRatio":0,"minHeight":600,"isDark":false} -->
	<div class="wp-block-cover is-light" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1692" alt="' . esc_attr__( 'Palais Du Gouverneur, à Uxmal, detail de la Porte Principale', 'archeo' ). '" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/palais-du-gouverneur.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover -->

	<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
	<p class="has-primary-color has-text-color has-small-font-size">' . esc_html__( 'Photograph by Désiré Charnay, 1862 – 1863', 'archeo' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>Uxmal is an ancient Maya city located in present-day Mexico. It is considered one of the most important sites of Maya culture.</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
