<?php
/**
 * Title: Default footer
 * Slug: curator/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:1.5rem;padding-bottom:1.5rem"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
  <?php
  printf(
    /* Translators: WordPress link. */
    esc_html__( 'Proudly powered by %s', 'curator' ),
    '<a href="' . esc_url( __( 'https://wordpress.org', 'curator' ) ) . '" rel="nofollow">WordPress</a>'
  );
  ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--background)","openInNewTab":true,"showLabels":true,"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"}}}} -->
<ul class="wp-block-social-links has-visible-labels has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

