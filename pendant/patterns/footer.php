<?php
/**
 * Title: Default footer
 * Slug: pendant/footer
 * Block Types: core/template-part/footer
 * inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:group {"align":"full","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php echo esc_html__( '2021 Pendant © All Rights Reserved', 'pendant' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php echo esc_html__( 'Powered by', 'pendant' ); ?> <a rel="nofollow" href="https://wordpress.org">WordPress</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->