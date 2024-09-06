<?php
/**
 * Title: front-page
 * Slug: sprinkler/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-right:1.5rem;padding-left:1.5rem"><!-- wp:heading {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignfull has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--80)"><?php esc_html_e('Welcome to Sprinkler, a blog by three friends with tips, guides and how-to\'s about gardening and landscaping.', 'sprinkler');?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"align":"full"} -->
<h2 class="wp-block-heading alignfull"><?php esc_html_e('Category One', 'sprinkler');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"full","style":{"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"1.5rem"}}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1px;padding-top:1.5rem"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide"} /-->

<!-- wp:post-title {"isLink":true,"align":"full","style":{"typography":{"fontSize":"1.4rem"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"0.8rem","letterSpacing":"0.1em"}},"fontFamily":"lato"} -->
<p class="has-lato-font-family" style="font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Read All ‘Category One’ Posts', 'sprinkler');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"align":"full"} -->
<h2 class="wp-block-heading alignfull"><?php esc_html_e('Category Two', 'sprinkler');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"full","style":{"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"1.5rem"}}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1px;padding-top:1.5rem"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide"} /-->

<!-- wp:post-title {"isLink":true,"align":"full","style":{"typography":{"fontSize":"1.4rem"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"0.8rem","letterSpacing":"0.1em"}},"fontFamily":"lato"} -->
<p class="has-lato-font-family" style="font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Read All ‘Category Two’ Posts', 'sprinkler');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:heading {"align":"full"} -->
<h2 class="wp-block-heading alignfull"><?php esc_html_e('Category Three', 'sprinkler');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"full","style":{"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|primary","style":"solid","width":"1px"},"right":[],"bottom":[],"left":[]},"spacing":{"padding":{"top":"1.5rem"}}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--primary);border-top-style:solid;border-top-width:1px;padding-top:1.5rem"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":8,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide"} /-->

<!-- wp:post-title {"isLink":true,"align":"full","style":{"typography":{"fontSize":"1.4rem"}}} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"0.8rem","letterSpacing":"0.1em"}},"fontFamily":"lato"} -->
<p class="has-lato-font-family" style="font-size:0.8rem;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Read All ‘Category Three’ Posts', 'sprinkler');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_3-scaled.jpg","dimRatio":30,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.65,"y":0.3},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"textColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-tertiary-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('', 'sprinkler');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/image_3-scaled.jpg" style="object-position:65% 30%" data-object-fit="cover" data-object-position="65% 30%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"large"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-large-font-size"><?php esc_html_e('We are now offering personalized gardening services. From initial consultations to ongoing maintenance, we are here to guide you every step of the way.', 'sprinkler');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php esc_html_e('See our services', 'sprinkler');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->