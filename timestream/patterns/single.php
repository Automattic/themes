<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: single
 * Slug: timestream/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"60%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"metadata":{"name":"Date and Title"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

<!-- wp:post-title {"level":1,"fontSize":"x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained","justifyContent":"left"}} /-->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"color":[]}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title /-->

<!-- wp:comment-template -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link {"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous {"label":"Older"} /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next {"label":"Newer"} /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"15%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:15%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Section Title"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"0.01rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"medium"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.01rem;text-transform:uppercase"><?php esc_html_e('Timeline of events', 'timestream');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"metadata":{"name":"Sidebar post template wrapper"},"style":{"border":{"left":{"color":"var:preset|color|contrast","style":"dotted","width":"1px"}},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--contrast);border-left-style:dotted;border-left-width:1px"><!-- wp:group {"metadata":{"name":"Sidebar date wrapper"},"style":{"border":{"left":{"color":"var:preset|color|contrast","width":"3px"}},"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--contrast);border-left-width:3px;padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date {"format":"Y","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sidebar title wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":1.3999999999999999}},"fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->