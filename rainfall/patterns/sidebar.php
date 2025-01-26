<?php
/**
 * Title: sidebar
 * Slug: rainfall/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"aside","layout":{"type":"constrained"}} -->
<aside class="wp-block-group"><!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"0.44rem"}}}} -->
<h6 class="wp-block-heading" style="margin-bottom:0.44rem"><?php esc_html_e('Search for a Topic', 'rainfall');?></h6>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search for a Topic","showLabel":false,"placeholder":"Type something...","buttonText":"Search"} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"0.44rem"}}}} -->
<h6 class="wp-block-heading" style="margin-bottom:0.44rem"><?php esc_html_e('Categories', 'rainfall');?></h6>
<!-- /wp:heading -->

<!-- wp:categories /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"0.44rem"}}}} -->
<h6 class="wp-block-heading" style="margin-bottom:0.44rem"><?php esc_html_e('Posted Recently', 'rainfall');?></h6>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"0.44rem"}}}} -->
<h6 class="wp-block-heading" style="margin-bottom:0.44rem"><?php esc_html_e('Submissions', 'rainfall');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Would you like to contribute as an editor or a writer to our blog? Let us know all the details about yourself and send us a message.', 'rainfall');?></p>
<!-- /wp:paragraph --></aside>
<!-- /wp:group -->
