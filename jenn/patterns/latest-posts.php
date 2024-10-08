<?php
/**
 * Title: Latest Posts
 * Slug: jenn/latest-posts
 * Categories: posts, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading alignwide has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);line-height:1"><?php esc_html_e('From the blog', 'jenn');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":17,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0"><!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"fontSize":"large"} /-->

<!-- wp:template-part {"slug":"post-meta"} /-->

<!-- wp:spacer {"height":"20px","style":{"layout":{"flexSize":"20px","selfStretch":"fixed"}}} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-excerpt {"moreText":"","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('No posts were found.', 'jenn');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->
</div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
