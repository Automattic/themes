<?php
/**
 * Title: home
 * Slug: booknest/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"cover-original","area":"uncategorized"} /-->

<!-- wp:group {"metadata":{"name":"content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Intro"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"none"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="text-transform:none"><?php esc_html_e('Discover your next great read with Booknest, a community where stories come to life, and book lovers unite', 'booknest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Booknest is the ultimate haven for book enthusiasts. Whether you’re a lifelong reader or just starting your literary journey, our club offers something for everyone. Explore our carefully curated selections, connect with fellow book lovers, and dive deep into the world of literature.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"dimensions":{"minHeight":"240px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="min-height:240px"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.01rem"}}} -->
<p style="font-size:0.01rem"><?php esc_html_e('|', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"now-reading-a","area":"uncategorized","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Upcoming"},"align":"wide","style":{"border":{"radius":"3px"},"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-radius:3px"><!-- wp:group {"style":{"dimensions":{"minHeight":"240px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="min-height:240px"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.01rem"}}} -->
<p style="font-size:0.01rem"><?php esc_html_e('|', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"border":{"top":{"width":"1px","style":"solid"},"bottom":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="line-height:1.1"><?php esc_html_e('Upcoming Events', 'booknest');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Monthly Book Discussion', 'booknest');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('September 20, 2024 — 7:00 PM - 9:00 PM', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Join us for an engaging discussion of our book of the month. Share your thoughts, listen to others’ insights, and deepen your understanding of the story.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('RSVP Now', 'booknest');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Author Q&amp;A Session', 'booknest');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('September 25, 2024  — 6:00 PM - 7:00 PM', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Understand the author of The Tempest in this exclusive Q&amp;A session. Ask your burning questions and learn about the inspiration behind the book.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Join Live', 'booknest');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"book-row-a","area":"uncategorized","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","align":"wide"} -->
<h2 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('Meet Readers, Make Friends', 'booknest');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"0","left":"0","right":"0","top":"0"},"blockGap":{"top":"1px","left":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-base-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|40","right":"var:preset|spacing|50","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-secondary-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size" style="letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Sarah K.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('BookNest is ultimately my sanctuary', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-base-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"verticalAlignment":"stretch","width":"1%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch"} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|40","right":"var:preset|spacing|50","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-secondary-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size" style="letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('John D.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('I\'ve found so many gems here', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"0"}}},"backgroundColor":"base"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-base-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-bottom:0"><!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"bottom":"var:preset|spacing|40","right":"var:preset|spacing|50","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-secondary-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size" style="letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Emily R.', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('This community is wonderful', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" style="text-transform:uppercase"><?php esc_html_e('Blog', 'booknest');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Read the Blog', 'booknest');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"layout":{"selfStretch":"fixed","flexSize":"33.33%"}}} /-->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0"},"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"none"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","fontFamily":"chivo-mono"} -->
<p class="has-secondary-color has-text-color has-link-color has-chivo-mono-font-family has-small-font-size"><?php esc_html_e('↳', 'booknest');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"1%"} -->
<div class="wp-block-column" style="flex-basis:1%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"FAQ"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"large"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-large-font-size"><?php esc_html_e('Frequently Asked Questions', 'booknest');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:details {"showContent":true} -->
<details class="wp-block-details" open><summary>Will you really get back to me within 24-48 hours?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400"><?php esc_html_e('Yes. We have created a smooth and efficient process that will allow us to give you an estimate even when we are on the road or not in the office.', 'booknest');?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>What is your hourly rate? Is there a job minimum?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400"><?php esc_html_e('Yes. We have created a smooth and efficient process that will allow us to give you an estimate even when we are on the road or not in the office.', 'booknest');?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Will you supply us with multiple estimates?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400"><?php esc_html_e('Yes. We have created a smooth and efficient process that will allow us to give you an estimate even when we are on the road or not in the office.', 'booknest');?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Are the repairs guaranteed?</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<p style="font-style:normal;font-weight:400"><?php esc_html_e('Yes. We have created a smooth and efficient process that will allow us to give you an estimate even when we are on the road or not in the office.', 'booknest');?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->