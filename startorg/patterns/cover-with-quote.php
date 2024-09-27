<?php
/**
 * Title: Cover with Quote
 * Slug: startorg/cover-with-quote
 * Categories: text
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home_image_2.jpg","dimRatio":70,"overlayColor":"tertiary","minHeight":600,"style":{"spacing":{"padding":{"top":"0px","right":"4vw","bottom":"0px","left":"4vw"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-contrast-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:4vw;padding-bottom:0px;padding-left:4vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home_image_2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem","padding":{"right":"2rem"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-right:2rem"><!-- wp:heading {"style":{"typography":{"fontSize":"10rem","lineHeight":"0"}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-secondary-color has-text-color" style="font-size:10rem;line-height:0"><?php esc_html_e('“', 'startorg');?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('After identifying children who may face challenges in the educational environment, we offer support designed for their specific needs.”', 'startorg');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php echo wp_kses_post( __('<strong>Meghan Ibrahim</strong>', 'startorg') );?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php esc_html_e('Experience Manager at StartOrg', 'startorg');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
