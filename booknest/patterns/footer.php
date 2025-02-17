<?php
/**
 * Title: footer
 * Slug: booknest/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Wrapper"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Footer Simple Wrapper"},"style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0c0503","showLabels":true,"size":"has-normal-icon-size","metadata":{"name":"Social icons"},"className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only" style="border-top-style:dotted;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--20)"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"tumblr"} /-->

<!-- wp:social-link {"url":"#","service":"bluesky"} /-->

<!-- wp:social-link {"url":"#","service":"medium"} /-->

<!-- wp:social-link {"url":"#","service":"feed"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:group {"metadata":{"name":"Designed with WordPress"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"metadata":{"name":"Site Title"},"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"right","metadata":{"name":"Arrow icon"},"style":{"typography":{"lineHeight":"1"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<p class="has-text-align-right" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);line-height:1"><?php esc_html_e('⇡', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1"}},"fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size" style="line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s.', 'booknest' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->