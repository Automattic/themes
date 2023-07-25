<?php
/**
 * Title: home
 * Slug: lativ/home
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:template-part {"slug":"header","tagName":"header"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:20px;padding-left:20px"><!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"5.6rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:5.6rem"><?php echo esc_html__( 'Manage your health easily.', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:site-tagline {"textAlign":"center"} /-->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'Trusted by the best', 'lativ' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logos.webp" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Why Lativ', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"2vh"} -->
<div style="height:2vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"20px"},"border":{"radius":"20px"}},"backgroundColor":"custom-green","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-custom-green-background-color has-background" style="border-radius:20px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"width":180,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-1.webp" alt="" style="width:180px" width="180"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html__( 'Medical Records Management', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Easily access and share medical records with your healthcare professional, ensuring more efficient care.', 'lativ' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"20px"},"border":{"radius":"20px"}},"backgroundColor":"primary","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background-color has-primary-background-color has-text-color has-background" style="border-radius:20px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"width":180,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-2.webp" alt="" style="width:180px" width="180"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html__( 'Diagnosis Assistance', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Our AI algorithms analyze your data to provide accurate diagnosis assistance to healthcare professionals.', 'lativ' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"blockGap":"20px"},"border":{"radius":"20px"}},"backgroundColor":"custom-purple","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-background-color has-custom-purple-background-color has-text-color has-background" style="border-radius:20px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"width":180,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image-3.webp" alt="" style="width:180px" width="180"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="font-style:normal;font-weight:300"><?php echo esc_html__( 'Personalized Treatment Plans', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'By tailoring treatment plans to your specific needs, Vital helps improve outcomes and incrlativ your health.', 'lativ' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"60px","bottom":"60px"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background" style="padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:spacer {"height":"4vh"} -->
<div style="height:4vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"100px","left":"100px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}},"className":"is-style-default"} -->
<figure class="wp-block-image size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/testimonial_image.webp" alt="" style="border-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( '"Lativ has never been a concern since day one. It takes care of everything for you, so you can focus on the important things”', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Valerie Thompson', 'lativ' ); ?></strong><br><?php echo esc_html__( 'CEO, Marathon', 'lativ' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'View Case Study', 'lativ' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"4vh"} -->
<div style="height:4vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"60px","bottom":"60px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:spacer {"height":"4vh"} -->
<div style="height:4vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}},"border":{"radius":"20px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="border-radius:20px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":40,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/business_logo.webp" alt="" style="width:40px;height:40px" width="40" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php echo esc_html__( 'Get the full experience With Lativ Tracker™', 'lativ' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'With Lativ Tracker, you\'re able to measure physical data such as blood pressure, cholesterol levels, blood glucose levels, your menstrual cycle and so much more.', 'lativ' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Explore the Product', 'lativ' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/business_image.webp" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
