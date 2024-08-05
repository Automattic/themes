<?php
/**
 * Title: home
 * Slug: brightblog/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"color":null,"style":null,"width":null,"top":{"color":"var:preset|color|secondary","style":"solid","width":"4vh"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-columns alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:4vh;margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"20%","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:20%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem;flex-basis:80%"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignfull"><!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-template {"align":"full"} -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"9/16","width":"","height":"","style":{"color":[],"layout":{"selfStretch":"fixed","flexSize":"40%"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0rem","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"left","level":1,"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-date {"style":{"spacing":{"blockGap":"1rem"}}} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"},"spacing":{"blockGap":"1rem"}},"fontFamily":"rubik"} -->
<p class="has-rubik-font-family" style="font-size:1rem"><?php esc_html_e('·', 'brightblog');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","style":{"spacing":{"blockGap":"1rem"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","fontSize":"medium"} /-->

<!-- wp:read-more {"content":"⇢","className":"no-underline","style":{"typography":{"textDecoration":"none"}},"fontSize":"x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->