<?php
/**
 * Title: Footer
 * Slug: batch/footer
 * Inserter: no
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-5"}}}},"textColor":"theme-5","fontSize":"large"} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%"} -->
<div class="wp-block-column" style="flex-basis:16.67%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:16.67%"><!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"letterSpacing":"0px","textTransform":"none","textDecoration":"underline"},"spacing":{"blockGap":"0"}},"fontSize":"small","fontFamily":"gentium-plus","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="flex-basis:16.67%"><!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">hi@mygroovydomain.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">(123) 456-7890</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:social-links {"size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-small-icon-size is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-center" style="font-size:14px">
<?php echo wp_kses_post( __ ('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a> ', 'batch') );?>
</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->