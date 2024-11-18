<?php
/**
 * Title: sidebar
 * Slug: casthub/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Sidebar wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"About the Podcast"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.025rem"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('About the Podcast', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Copy and link"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Welcome to The Houseplant Podcast, your ultimate guide to houseplants! Join us as we explore the wonders and importance of plants in our lives.', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="text-transform:none"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sExplore the episodes%2$s', 'casthub' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Latest Episodes"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.025rem"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Latest posts', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":36,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"1.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"80px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->