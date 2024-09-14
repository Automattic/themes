<?php
/**
 * Title: search
 * Slug: bysshe/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"tagName":"header","layout":{"type":"default"}} -->
<header class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Search', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"textAlign":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></header>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<main class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|70","bottom":"0","left":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--70);padding-bottom:0;padding-left:var(--wp--preset--spacing--70)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"overlayColor":"background","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|80"}},"color":{"duotone":["#000000","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--80);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"width":"8rem","height":"15rem","style":{"color":{"duotone":["#000000","#ffffff"]}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%","style":{"spacing":{"padding":{"right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0;flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80)">

<!-- wp:search {"showLabel":false,"placeholder":"Search...","buttonUseIcon":true} /-->

<!-- wp:spacer {"height":"40px","style":{"layout":[]}} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"small"} /-->

<!-- wp:post-date {"format":"M j Y","isLink":true,"className":"nowrap"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
	<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
	<p class="has-xx-small-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'bysshe' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:spacer {"height":"64px","style":{"layout":[]}} -->
<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous"} /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"footer","layout":{"type":"default"}} -->
<footer class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:paragraph {"align":"right","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400","lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php esc_html_e('Search', 'bysshe');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} /-->

<!-- wp:paragraph {"align":"right","className":"no-underline","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right no-underline has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bysshe' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'bysshe' ),
		$wordpress_link
	);
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group --></div>
<!-- /wp:group -->
