<?php
/**
 * Title: Text Left Form Right 
 * Slug: jenn/text-left-form-right
 * Categories: call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"36%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:36%"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e('Have questions? Want to learn more?', 'jenn');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Please feel free to contact me by phone or email. Or alternatively fill in the form below, and I will get back to you as soon as I can.', 'jenn');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"64%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:64%"><!-- wp:jetpack/contact-form {"subject":"[Yoga with Jenn] Home page","to":"","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-jetpack-contact-form" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)"} /-->

<!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Send Message","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
