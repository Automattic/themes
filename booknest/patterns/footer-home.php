<?php
/**
 * Title: footer-home
 * Slug: booknest/footer-home
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Wrapper"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"name":"Footer Copy Wrapper"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}},"border":{"radius":"15px"}},"backgroundColor":"primary","textColor":"tertiary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group has-tertiary-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:15px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"metadata":{"name":"Footer Wrapper"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fill","flexSize":null},"typography":{"letterSpacing":"0.025rem","textTransform":"none"}},"textColor":"base","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-left has-base-color has-text-color has-link-color has-xx-large-font-size" style="letter-spacing:0.025rem;text-transform:none"><?php esc_html_e('Join the club', 'booknest');?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","className":"has-dropcap"} -->
<p class="has-text-align-left has-dropcap"><?php esc_html_e('Become a part of Booknest and connect with folks who share your passion for reading. As a member, you’ll have exclusive access to curated book lists, engaging discussions, and special events tailored to your interests.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Discover new reads and explore your favorite genres with Booknest, the perfect place to explore and share your literary journey.', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60","metadata":{"name":"L"}} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"base","textColor":"primary","width":100,"className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"borderColor":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-primary-color has-base-background-color has-text-color has-background has-link-color has-border-color has-base-border-color has-text-align-center wp-element-button"><?php esc_html_e('Sign up', 'booknest');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textAlign":"center","backgroundColor":"quaternary","textColor":"tertiary","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"borderColor":"tertiary"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-tertiary-color has-quaternary-background-color has-text-color has-background has-link-color has-border-color has-tertiary-border-color has-text-align-center wp-element-button"><?php esc_html_e('About us', 'booknest');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Designed with WordPress"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#0c0503","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"mastodon"} /-->

<!-- wp:social-link {"url":"#","service":"tumblr"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s.', 'booknest' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->