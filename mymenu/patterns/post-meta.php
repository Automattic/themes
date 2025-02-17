<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: post-meta
 * Slug: mymenu/post-meta
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Post Meta Wrapper"},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":1}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1"><?php esc_html_e('$', 'mymenu');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"lineHeight":1}},"fontSize":"medium","fontFamily":"texgyreadventor"} /--></div>
<!-- /wp:group -->