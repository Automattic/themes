<?php
/**
 * Title: home
 * Slug: koinonia/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-home"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Featuring"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|70"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('A supportive experience that turns caring into community', 'koinonia');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Intro paragraph"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('At PawPals, we believe in the power of community to make a positive impact on the lives of pets. Join our collaborative network of pet lovers dedicated to providing love, care, and support.', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"0%"} -->
<div class="wp-block-column" style="flex-basis:0%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"Spacer L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Service 1"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Icon"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icn_sitting.png" alt="" style="aspect-ratio:1;object-fit:cover;width:auto;height:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e('Pet Sitting', 'koinonia');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Ensure your pet\'s well-being while you\'re away with our professional pet-sitting services.', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Service 2"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Icon"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icn_overnight.png" alt="" style="aspect-ratio:1;object-fit:cover;width:auto;height:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e('Overnight Care', 'koinonia');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Experience peace of mind with the overnight care services offered by the PP volunteers.', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Service 3"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Icon"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icn_grooming.png" alt="" style="aspect-ratio:1;object-fit:cover;width:auto;height:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e('Grooming', 'koinonia');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Treat your pets to a pampering session with our diverse grooming services.', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Service 4"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Icon"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icn_taxi.png" alt="" style="aspect-ratio:1;object-fit:cover;width:auto;height:64px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Copy"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e('Pet Taxi', 'koinonia');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Our reliable pet taxi service ensures safe and comfortable journeys for your furry companions.', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Testimonial 1"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"secondary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default","style":{"border":{"radius":"10px"},"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img_rawpixel-id-6043044.jpg" alt="" style="border-radius:10px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","metadata":{"name":"Testimonial"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color"><?php esc_html_e('A passionate community of pet advocates dedicated to collaborating for the well-being of humans &amp; animals.', 'koinonia');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color"><?php esc_html_e('With a collective commitment to the welfare of pets, PetHelp Hub brings together individuals who share a common goal: ensuring every pet lives a happy and healthy life.', 'koinonia');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"Spacer S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('About Us', 'koinonia');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Section title"},"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php esc_html_e('Blog', 'koinonia');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"Spacer S"},"style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":17,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"taxQuery":null},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"metadata":{"name":"QL copy"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Testimonial 2"},"align":"wide","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"width":"56px","height":"56px","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"quotation marks"},"style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/speech-marks.png" alt="" style="object-fit:cover;width:56px;height:56px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Testimonial wrapper"},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","metadata":{"name":"Testimonial"}} -->
<h2 class="wp-block-heading has-text-align-left"><?php esc_html_e('The pet taxi service made my life so much easier. It\'s reliable, and my pet loves the rides. Thank you, PP, excellent service!', 'koinonia');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Alex Garfield', 'koinonia');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"},"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/img_rawpixel-id-6038845.jpg" alt="" style="border-radius:10px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Subscribe"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Subscribe to%1$sGet our News', 'koinonia' ), '<br>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('PawPals invites you to be a hero for pets! Collaborate with us to create a world where no pet is left behind.', 'koinonia');?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/subscriptions {"buttonWidth":"25%"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"Spacer S"},"style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->