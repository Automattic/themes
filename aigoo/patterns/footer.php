<?php
/**
 * Title: footer
 * Slug: aigoo/footer
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"backgroundColor":"custom-light","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-custom-light-background-color has-text-color has-background has-link-color" style="padding-right:6vw;padding-left:6vw"><!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"bottom":"2vh"}}}} -->
<div class="wp-block-columns alignwide" style="padding-bottom:2vh"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"align":"wide","fontSize":"x-large"} /-->

<!-- wp:site-tagline /-->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#1e00b1","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"feed"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontFamily":"metropolis"} -->
<p class="has-metropolis-font-family" style="font-size:12px;letter-spacing:0.06em;text-transform:uppercase"><?php echo wp_kses_post( __ ( '<strong>More from Aigo</strong>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"},"typography":{"fontSize":"12px"}},"layout":{"type":"flex","orientation":"vertical"},"fontFamily":"metropolis"} -->
<div class="wp-block-group has-metropolis-font-family" style="font-size:12px"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Newsletter</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Subscribe</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","letterSpacing":"0.06em"}},"fontFamily":"metropolis"} -->
<p class="has-metropolis-font-family" style="font-size:12px;letter-spacing:0.06em;text-transform:uppercase"><?php echo wp_kses_post( __ ( '<strong>Contacts</strong>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.1rem"},"typography":{"fontSize":"12px"}},"layout":{"type":"flex","orientation":"vertical"},"fontFamily":"metropolis"} -->
<div class="wp-block-group has-metropolis-font-family" style="font-size:12px"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Contact Us</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Questions</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"3vh","bottom":"6vh"}},"border":{"top":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"right":[],"bottom":[],"left":[]}}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--contrast);border-top-style:dotted;border-top-width:2px;padding-top:3vh;padding-bottom:6vh"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.7rem"}},"fontFamily":"metropolis"} -->
<p class="has-text-align-left has-metropolis-font-family" style="font-size:0.7rem"><?php echo wp_kses_post( __ ( 'Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
