<?php
/**
 * Title: sidebar
 * Slug: excerpts/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between","justifyContent":"stretch"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Related Articles', 'excerpts');?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":21,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Get updates', 'excerpts');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Spam-free subscription, we guarantee. This is just a friendly ping when new content is out.', 'excerpts');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:jetpack/contact-form {"subject":"[Texty] Posts","to":"henrique.iamarino@a8c.com","className":"is-style-animated","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-jetpack-contact-form is-style-animated" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","borderRadius":4,"borderWidth":1,"labelFontSize":"1rem","fieldFontSize":"1rem","lineHeight":1,"labelLineHeight":1,"inputColor":"#111111","labelColor":"#111111","borderColor":"#111111"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","borderRadius":4,"borderWidth":1,"labelFontSize":"1rem","fieldFontSize":"1rem","lineHeight":1,"labelLineHeight":1,"inputColor":"#111111","labelColor":"#111111","borderColor":"#111111"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Subscribe","textColor":"background","backgroundColor":"primary","borderRadius":4,"width":"100%","lock":{"remove":true},"fontSize":"small"} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->