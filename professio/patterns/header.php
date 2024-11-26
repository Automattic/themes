<?php
/**
 * Title: header
 * Slug: professio/header
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Header wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Menu and Intro"},"align":"wide","style":{"border":{"bottom":{"width":"1px","style":"dotted"}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-style:dotted;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom","width":""} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fixed","flexSize":"230px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-tagline /-->

<!-- wp:paragraph {"className":"no-underline","style":{"typography":{"letterSpacing":"0.025rem","lineHeight":"1","textTransform":"uppercase"}},"fontSize":"small","fontFamily":"pt-root-ui"} -->
<p class="no-underline has-pt-root-ui-font-family has-small-font-size" style="letter-spacing:0.025rem;line-height:1;text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact%2$s', 'professio' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":""} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:navigation {"icon":"menu","align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"textTransform":"uppercase","lineHeight":"0.9"}},"fontSize":"xxxx-large"} -->
<h1 class="wp-block-heading alignwide has-xxxx-large-font-size" style="line-height:0.9;text-transform:uppercase"><?php esc_html_e('Embark the learning odyssey with Nausicaä.', 'professio');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->