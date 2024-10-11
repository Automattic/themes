<?php
/**
 * Title: Homepage with categories top section, posts with sidebar and newsletter
 * Slug: bain-marie/homepage-with-categories
 * Categories: featured, page
 * Inserter: yes
 */
?>

<!-- wp:cover {"overlayColor":"tertiary","isUserOverlayColor":true,"isDark":false,"metadata":{"name":"Search field and browse by category"},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light"><span aria-hidden="true" class="wp-block-cover__background has-tertiary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"x-large"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-x-large-font-size"><?php esc_html_e('Tasty food, made simple, for everyone.', 'bain-marie');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php echo wp_kses_post( __ ( 'Search my recipes below or view <em><a href="#">all recipes</a></em>.', 'bain-marie' ) );?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"\u0022Apple Pie\u0022","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"fontSize":"small"} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-3-scaled.jpg","dimRatio":0,"customOverlayColor":"#524b3d","isUserOverlayColor":true,"contentPosition":"bottom left","style":{"layout":{"selfStretch":"fixed","flexSize":"360px"},"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#524b3d"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-3-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Healthy', 'bain-marie');?></a></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-2-scaled.jpg","dimRatio":0,"customOverlayColor":"#524b3d","isUserOverlayColor":true,"contentPosition":"bottom left","style":{"layout":{"selfStretch":"fixed","flexSize":"360px"},"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#524b3d"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-2-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Quick And Easy', 'bain-marie');?></a></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-7-scaled.jpg","dimRatio":0,"customOverlayColor":"#524b3d","isUserOverlayColor":true,"contentPosition":"bottom left","style":{"layout":{"selfStretch":"fixed","flexSize":"360px"},"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#524b3d"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-7-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Desserts', 'bain-marie');?></a></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"25%"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-9.jpg","dimRatio":0,"customOverlayColor":"#524b3d","isUserOverlayColor":true,"contentPosition":"bottom left","style":{"layout":{"selfStretch":"fixed","flexSize":"360px"},"dimensions":{"aspectRatio":"1"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-base-color has-text-color has-link-color"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#524b3d"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-9.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Leftover fun', 'bain-marie');?></a></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide has-contrast-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Breakfast', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Snacks', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Fish', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Meat', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Vegan', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Eggs', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Gluten-Free', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Dairy-free', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Soups', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Salads', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Pasta', 'bain-marie');?></a></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-left has-jost-font-family has-small-font-size" style="letter-spacing:0.16em;text-transform:uppercase"><a href="#"><?php esc_html_e('Bowls', 'bain-marie');?></a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Posts with sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"4vw"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em"}},"fontSize":"small","fontFamily":"jost"} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"View recipe","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There are currently no posts in your site. Add some posts to see this section.', 'bain-marie');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></main>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"bain-marie"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Newsletter CTA"},"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:6vh;padding-bottom:6vh"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3vw"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-aboutme-1-1024x1024.jpg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"200"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" id="h-i-love-food" style="font-style:normal;font-weight:200"><?php esc_html_e('Sign up for email updates and enjoy a multitude of cooking tips!', 'bain-marie');?></h2>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-form {"className":"is-style-animated","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"right":"0","left":"0"}}}} -->
<div class="wp-block-jetpack-contact-form is-style-animated" style="margin-right:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:jetpack/field-email {"required":true,"borderWidth":1,"labelFontSize":"1.125rem","fieldFontSize":"1rem","labelColor":"#000000","shareFieldAttributes":false} /-->

<!-- wp:jetpack/button {"element":"button","text":"Sign Up","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->