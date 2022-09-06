<?php
/**
 * Title: Home
 * Slug: rainfall/home
 * Categories: featured, columns
 */
?>
<!-- wp:group {"backgroundColor":"orange"} -->
<div class="wp-block-group has-orange-background-color has-background"><!-- wp:template-part {"slug":"header","tag":"header","theme":"rainfall"} /-->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'The City That Never Sleeps', 'rainfall' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":null} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"bottom","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:33.33%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size"><?php echo esc_html__( '002', 'rainfall' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
<p style="text-transform:uppercase"><a href="/about"><?php esc_html_e( 'Read Issue', 'rainfall' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
<figure class="wp-block-image size-large"><a href="/about"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/home.jpg" alt="<?php esc_html_e( 'Person with umbrella', 'rainfall' ); ?>"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"12px"} -->
<div style="height:12px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"full","backgroundColor":"white"} -->
<div class="wp-block-columns alignfull has-white-background-color has-background"><!-- wp:column {"width":"70%","style":{"spacing":{"padding":{"top":"20px","right":"0","bottom":"20px","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0;flex-basis:70%"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","inherit":true,"perPage":4},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"align":"wide","style":{"spacing":{"blockGap":"1rem"}}} -->
<div class="wp-block-group alignwide"><!-- wp:post-featured-image {"width":"179px","height":"100px"} /-->

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
<div class="wp-block-column" style="padding-top:20px;padding-right:0;padding-bottom:20px;padding-left:0;flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"rainfall"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black"} -->
<div class="wp-block-group has-black-background-color has-background has-link-color"><!-- wp:group {"layout":{"inherit":false},"align":"wide","style":{"spacing":{"padding":{"bottom":"8rem","top":"8rem","right":"0","left":"0"}}},"backgroundColor":"black"} -->
<div class="wp-block-group alignwide has-black-background-color has-background" style="padding-top:8rem;padding-right:0;padding-bottom:8rem;padding-left:0"><!-- wp:heading {"level":1,"textColor":"white"} -->
<h1 class="has-white-color has-text-color"><?php esc_html_e( 'Work With Us', 'rainfall' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color"><?php esc_html_e( 'Rainfall is an online magazine featuring curated stories about real people. We are passionate about interviewing people from self-employed enterpreneurs to established CEO’s and represent the times.', 'rainfall' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"var(--wp--preset--spacing--70)"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:var(--wp--preset--spacing--70)"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Browse Open Positions', 'rainfall' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tag":"footer","theme":"rainfall"} /--></div>
<!-- /wp:group -->
