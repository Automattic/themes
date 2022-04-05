<?php
/**
 * Title: Default footer
 * Slug: pendant/footer
 * Categories: pendant footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( '2021 Pendant © All Rights Reserved', 'pendant' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->
<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php echo esc_html__( 'Powered by', 'pendant' ); ?> <a rel="nofollow" href="https://wordpress.org">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->