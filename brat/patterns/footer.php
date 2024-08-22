<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: Footer
 * Slug: brat/footer
 * Categories: footer
 */
?>
<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60)","bottom":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60)"},"blockGap":"8px"}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:site-title {"textAlign":"center","fontSize":"large"} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"}}} -->
<p class="has-text-align-center" style="font-size:0.9rem">
   <?php
        /* Translators: WordPress link. */
        $wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'adonay' ) ) . '" rel="nofollow">WordPress</a>';
        echo sprintf(
            esc_html__( 'fyi, this theme was made with %1$s', 'adonay' ),
            $wordpress_link
        );
    ?> ❤️‍🔥
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->