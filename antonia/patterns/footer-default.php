<?php
/**
 * Title: Default footer block pattern
 * Slug: antonia/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"80px"},"margin":{"top":"60px"}},"border":{"top":{"color":"#eaeaec","width":"1px"}}},"layout":{"contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="border-top-color:#eaeaec;border-top-width:1px;margin-top:60px;padding-top:60px;padding-bottom:80px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"80px"}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:paragraph -->
<p><?php echo esc_html__('Engineers of the smart furniture that enables comfort and innovation.', 'antonia'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#aaaaaa"},"typography":{"textTransform":"uppercase","fontSize":"14px"}}} -->
<p class="has-text-color" style="color:#aaaaaa;font-size:14px;text-transform:uppercase"><?php echo esc_html__('Address.', 'antonia'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo sprintf( '%1$s<br>%2$s', esc_html( '123 Example St,', 'antonia' ), esc_html( 'CA 12345-6789', 'antonia' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"text":"#aaaaaa"},"typography":{"textTransform":"uppercase","fontSize":"14px"}}} -->
<p class="has-text-color" style="color:#aaaaaa;font-size:14px;text-transform:uppercase"><?php echo esc_html__('Find Us in Social Media', 'antonia'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#090e0e","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.instagram.com/","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
