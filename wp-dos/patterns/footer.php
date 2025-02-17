<?php
/**
 * Title: footer
 * Slug: wp-dos/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Wrapper"},"style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"position":{"type":""},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:0;padding-bottom:0"><!-- wp:columns {"verticalAlignment":"top","align":"full","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--40);flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sLinkedin%2$s', 'wp-dos' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTumblr%2$s', 'wp-dos' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sGitHub%2$s', 'wp-dos' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-text-align-left" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMastodon%2$s', 'wp-dos' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--40);flex-basis:20%"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s.', 'wp-dos' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->