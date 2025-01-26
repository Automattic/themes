<?php
/**
 * Title: index
 * Slug: rainfall/index
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"backgroundColor":"orange","layout":{"type":"default"}} -->
<div class="wp-block-group has-orange-background-color has-background" style="padding-right:0;padding-left:0"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:heading {"className":"indented-post-title","fontSize":"xx-large"} -->
<h2 class="wp-block-heading indented-post-title has-xx-large-font-size"><?php esc_html_e('The City That Never Sleeps', 'rainfall');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e('002', 'rainfall');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
<p style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sRead Issue%2$s', 'rainfall' ), '<a href="' . esc_url( '/about' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom","align":"right"} -->
<figure class="wp-block-image alignright size-large"><a href="/about"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home.jpg" alt="<?php esc_attr_e('Person with umbrella', 'rainfall');?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"12px"} -->
<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|110","left":"var:preset|spacing|200"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('Issues', 'rainfall');?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","inherit":false,"perPage":4}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|100"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"width":"100%","height":"max(32vw, 50vh)"} /-->

<!-- wp:post-date {"format":"M j","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#ffffff","link":"#ffffff"}},"fontSize":"large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"20px","right":"0","bottom":"20px","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0;flex-basis:30%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|100"} -->
<div style="height:var(--wp--preset--spacing--100)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:spacer {"height":"var:preset|spacing|200"} -->
<div style="height:var(--wp--preset--spacing--200)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"blockGap":"0"}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-black-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","right":"0rem","left":"0rem","top":"0rem"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-black-background-color has-background" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-white-color has-text-color"><?php esc_html_e('Work With Us', 'rainfall');?></h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php echo esc_html__( 'Rainfall is an online magazine featuring curated stories about real people. We are passionate about interviewing people from self-employed entrepreneurs to established CEO’s and represent the times.', 'rainfall' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"var(--wp--preset--spacing--70)"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:var(--wp--preset--spacing--70)"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","width":100,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Browse Open Positions', 'rainfall' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|200"} -->
<div style="height:var(--wp--preset--spacing--200)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->
