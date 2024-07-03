<?php
/**
 * Title: footer
 * Slug: vows/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"blockGap":"var:preset|spacing|70","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":0,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"width":"1px","style":"dotted"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"none","letterSpacing":"0rem"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"className":"no-underline"} -->
<h1 class="wp-block-heading no-underline"><?php echo __('<a href="/rsvp" data-type="page" data-id="391" rel="nofollow">RSVP</a>', 'vows');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"lock":{"move":false,"remove":false},"className":"no-underline","fontSize":"small"} -->
<p class="no-underline has-small-font-size"><?php echo __('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'vows');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->