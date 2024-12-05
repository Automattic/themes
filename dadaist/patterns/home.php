<?php
/**
 * Title: home
 * Slug: dadaist/home
 * Inserter: no
 */
?>
<!-- wp:cover {"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","contentPosition":"top center","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Hero section"},"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"40vh"}},"textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide has-primary-color has-text-color has-link-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Hero block"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"width":"auto","height":"96px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_img_eye.png" alt="" style="width:auto;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"1.5rem","metadata":{"name":"Spacer S"},"style":{"layout":[]}} -->
<div style="height:1.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e('Witness the avant-garde experiment that challenged the status quo and dreamed of a world beyond the absurdities of war.', 'dadaist');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Halftone Wrapper Red"},"align":"wide","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"top":{"width":"1px"},"right":{"width":"1px"},"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-width:1px;border-right-width:1px;border-left-width:1px;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"layout":{"selfStretch":"fill","flexSize":null},"border":{"right":{"width":"1px"},"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-width:1px;border-left-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.03rem"}},"fontSize":"medium","fontFamily":"antique-serie"} -->
<p class="has-text-align-center has-antique-serie-font-family has-medium-font-size" style="letter-spacing:-0.03rem;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sLead Artists%2$s', 'dadaist' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"layout":{"selfStretch":"fill","flexSize":null},"border":{"right":{"width":"1px"},"bottom":[],"left":{"width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="border-right-width:1px;border-left-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"-0.03rem"}},"fontSize":"medium","fontFamily":"antique-serie"} -->
<p class="has-text-align-center has-antique-serie-font-family has-medium-font-size" style="letter-spacing:-0.03rem;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sThe Movement%2$s', 'dadaist' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","lineHeight":"0.5"}},"fontSize":"medium","fontFamily":"urw-gothic"} -->
<h2 class="wp-block-heading has-text-align-center has-urw-gothic-font-family has-medium-font-size" style="line-height:0.5;text-transform:uppercase"><?php esc_html_e('Now on.', 'dadaist');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"8vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Red"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Black"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_2.png","id":10440,"source":"file","title":"dada_haltfone-tex_2"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Featured Image Block"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0.22rem;padding-right:0;padding-bottom:0.22rem;padding-left:0"><!-- wp:post-date {"format":"M j","isLink":true} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"small","fontFamily":"urw-gothic"} -->
<p class="has-urw-gothic-font-family has-small-font-size" style="line-height:1"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Red"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"3","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Black"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_2.png","id":10440,"source":"file","title":"dada_haltfone-tex_2"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"4","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Red"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:query {"queryId":3,"query":{"perPage":"1","pages":0,"offset":"5","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
<!-- wp:group {"metadata":{"name":"Halftone Wrapper Black"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_2.png","id":10440,"source":"file","title":"dada_haltfone-tex_2"},"backgroundSize":"720px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Query loop copy"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"4vh","right":"var:preset|spacing|50","left":"var:preset|spacing|40","bottom":"4vh"},"margin":{"top":"2vh"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group alignwide has-base-background-color has-background" style="margin-top:2vh;padding-top:4vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:4vh;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0vh","left":"0vh"},"padding":{"top":"0vh","bottom":"0vh","left":"0vh","right":"0vh"}}}} -->
<div class="wp-block-columns" style="padding-top:0vh;padding-right:0vh;padding-bottom:0vh;padding-left:0vh"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"textAlign":"left","moreText":"Read more.","showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"metadata":{"name":"Post Image and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":"var:preset|duotone|bw"}}} /-->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0.22rem","bottom":"0.22rem"}}},"backgroundColor":"base","layout":{"type":"flex"}} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:0.22rem;padding-bottom:0.22rem"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('·', 'dadaist');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"2vh"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="padding-top:2vh"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","lineHeight":"0.5"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"medium","fontFamily":"urw-gothic"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-urw-gothic-font-family has-medium-font-size" style="line-height:0.5;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAll posts.%2$s', 'dadaist' ), '<a href="' . esc_url( '#' ) . '" data-type="page" data-id="46">', '</a>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Halftone stroke"},"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"20px"},"layout":{"selfStretch":"fixed","flexSize":"33.33%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:20px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Subscribe"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Subscribe wrapper"},"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"0"}}},"backgroundColor":"secondary","textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Subscribe copy"},"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"auto","height":"96px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|bw"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_img_mouth.png" alt="" style="width:auto;height:96px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"0px","metadata":{"name":"Spacer S"},"style":{"layout":{"selfStretch":"fixed","flexSize":"1.5rem"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Don’t Miss a Minute.%1$sSubscribe Today.', 'dadaist' ), '<br>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3.5rem","metadata":{"name":"Spacer M"},"style":{"layout":[]}} -->
<div style="height:3.5rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Jetpack block wrapper"},"align":"wide","style":{"border":{"top":{"width":"1px"}},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-width:1px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Jetpack wrapper"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|70"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-right-width:1px;border-left-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:jetpack/contact-form {"subject":"[dadaistist] Front Page Contact","to":"your-email@domain.com","className":"is-style-animated"} -->
<div class="wp-block-jetpack-contact-form is-style-animated">
<!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","labelFontSize":"x-small","fieldFontSize":"small","lineHeight":1.5,"labelLineHeight":1.5,"inputColor":"#f04031","labelColor":"#f04031","fieldBackgroundColor":"#121212e6","borderColor":"#f04031"} /-->
<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","labelFontSize":"x-small","fieldFontSize":"small","lineHeight":1.5,"labelLineHeight":1.5,"inputColor":"#f04031","labelColor":"#f04031","fieldBackgroundColor":"#121212e6","borderColor":"#f04031"} /-->
<!-- wp:jetpack/button {"element":"button","text":"Subscribe Now","textColor":"contrast","backgroundColor":"primary","width":"100%","lock":{"remove":true},"fontSize":"x-small","style":{"typography":{"textTransform":"uppercase"}}} /-->
</div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->