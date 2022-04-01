<?php
/**
 * Title: Image with description and right-aligned headline
 * Slug: archeo/image-with-description-and-right-aligned-headline
 * Categories: images
 */
?>

<!-- wp:columns {"align":"full","backgroundColor":"background"} -->
<div class="wp-block-columns alignfull has-background-background-color has-background"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"overlayColor":"background","minHeight":670,"contentPosition":"bottom center","isDark":false} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="min-height:670px"><span aria-hidden="true" class="has-background-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"right","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} -->
<h3 class="has-text-align-right has-large-font-size" id="palais-du-gouverneur-a-uxmal-detail-de-la-porte-principale-1" style="text-transform:uppercase"><?php esc_html_e( 'The Nunnery Quadrangle at Uxmal', 'archeo' ); ?></h3>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-gouverneur.jpg","dimRatio":0,"minHeight":600,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:600px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e( 'Photo of the Nunnery Quadrangle, at Uxmal', 'archeo' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/palais-du-gouverneur.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:paragraph {"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size"><?php esc_html_e( 'Photograph by Désiré Charnay, 1862 – 1863', 'archeo' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Uxmal is an ancient Maya city located in present-day Mexico. It is considered one of the most important sites of Mayan culture.', 'archeo' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
