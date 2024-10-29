<?php
/**
 * Title: page
 * Slug: coachben/page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"5vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-bottom:10vh"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide"} -->
<main class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"default"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sign Up","categories":["About","Call","to","Action"],"patternName":"coachben/cta"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-large"} -->
<h2 class="wp-block-heading alignwide has-contrast-color has-text-color has-link-color has-x-large-font-size"><?php esc_html_e('Sign up for my weekly thoughts on Personal Development', 'coachben');?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":""}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
<p><?php esc_html_e('We know that life\'s challenges are unique and complex for everyone. Coaching is here to help you find yourself and realize your full potential.', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:buttons {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Subscribe', 'coachben');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->