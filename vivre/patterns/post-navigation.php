<?php
/**
 * Title: Post Navigation
 * Slug: vivre/post-navigation
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}},"border":{"top":{"color":"var:preset|color|foreground","width":"1px"},"bottom":{"color":"var:preset|color|foreground","width":"1px"}}},"className":"alignfull","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--foreground);border-top-width:1px;border-bottom-color:var(--wp--preset--color--foreground);border-bottom-width:1px;padding-top:30px;padding-bottom:30px"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"50%","layout":{"inherit":true}} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"className":"vivre-post-navigation","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group vivre-post-navigation">

<!-- wp:post-navigation-link {"type":"previous","label":"← <?php echo esc_html__( 'Previous Post', 'vivre' ); ?>","style":{"typography":{"textTransform":"uppercase","textDecoration":"none","fontWeight":"900"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"large","fontFamily":"work-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"className":"vivre-post-navigation","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group vivre-post-navigation"><!-- wp:post-navigation-link {"label":"<?php echo esc_html__( 'Next Post', 'vivre' ); ?> →","style":{"typography":{"textTransform":"uppercase","textDecoration":"none","fontWeight":"900"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"large","fontFamily":"work-sans"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
