<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: sidebar
 * Slug: brightblog/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar Top Section"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":48,"shouldSyncIcon":false,"style":{"color":[]}} /-->

<!-- wp:site-title /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"always","icon":"menu","overlayBackgroundColor":"secondary","overlayTextColor":"primary","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sidebar Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph -->
<p><?php esc_html_e('Brightblog is a beautifully designed WordPress blog theme that displays large typography and diverse color palettes.', 'brightblog');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('With its clean and modern design, Brightblog offers a unique and engaging way to showcase your blog content.', 'brightblog');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->