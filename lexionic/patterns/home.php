<?php
/**
 * Title: home
 * Slug: lexionic/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"40%","metadata":{"name":"Book Column"},"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:group {"metadata":{"name":"Book Stack"},"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:template-part {"slug":"book-cover-artwork"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"60%","metadata":{"name":"Content Column"},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="flex-basis:60%"><!-- wp:group {"tagName":"main","metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"585px","wideSize":"720px"}} -->
<main class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Book Intro"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
<h1 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--70)"><?php esc_html_e('A timeless epic on humanity, adventure, and perseverance', 'lexionic');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Homer’s Odyssey is not just a tale of heroism but a story of the human spirit’s quest for belonging. As Odysseus battles the forces of nature, mythical creatures, and divine will, the poem reflects on loyalty, identity, and the longing for home on a universal journey across time.', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Buy Now — $10.99', 'lexionic');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Download 1st Chapter', 'lexionic');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"Spacer XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Introduction"},"align":"wide","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-quaternary-background-color has-background"><!-- wp:group {"metadata":{"name":"Copy"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p><?php esc_html_e('The Odyssey is the tale of Ulysses, also known as Odysseus, and his heroic journey home after the Trojan War. Facing mythical beasts, wrathful gods, and his inner struggles, our hero celebrates the resilience of the human spirit. The story continues to captivate readers with its profound themes of loyalty, ingenuity, and the enduring quest for home.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/waterhouse-ulises-y-las-sirenas.jpg","dimRatio":0,"align":"wide","style":{"dimensions":{"aspectRatio":"3/2"}}} -->
<div class="wp-block-cover alignwide"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/waterhouse-ulises-y-las-sirenas.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Table of contents"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Section title"},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e('Table of contents', 'lexionic');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Get a look at all of the content covered in the book. Everything you need to know is inside.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapters"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"metadata":{"name":"Subheading"},"style":{"typography":{"letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Chapters', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Chapter block"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Chapter line 1"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('1', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('Invocation to the Muse', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapter line 2"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('10', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('The Trials of Polyphemus', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapter line 3"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('40', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('Sirens, Scylla, and Charybdis', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapter line 4"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('80', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('The Palace of Circe', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapter line 5"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('120', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('Return to Ithaca', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Chapter line 5"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Number"},"style":{"layout":{"selfStretch":"fixed","flexSize":"6%"},"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('130', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php esc_html_e('Concerning a Court Intrigue', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"Spacer M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"aligncenter"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View all Chapters', 'lexionic');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Author's bio"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0"><!-- wp:group {"metadata":{"name":"Section title"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Subheading"},"style":{"typography":{"letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"system-font"} -->
<p class="has-system-font-font-family has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('About the author', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"metadata":{"name":"Author name"},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e('Homer', 'lexionic');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Paragraphs"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('One of the most celebrated poets of ancient Greece, Homer is believed to have authored The Iliad and The Odyssey, epic works that shaped Western literature.', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Though little is known about his life, his stories have endured for millennia and offer profound insights into human nature, mythology, and the ancient world.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|50","metadata":{"name":"Spacer M"}} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/homer-rawpixel-id-8908534.jpg","dimRatio":0,"align":"wide","style":{"dimensions":{"aspectRatio":"3/2"}}} -->
<div class="wp-block-cover alignwide"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/homer-rawpixel-id-8908534.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e('What readers said', 'lexionic');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"Spacer S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Testimonial 1"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('An unparalleled epic that blends adventure, wisdom, and timeless storytelling.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial 2"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Homer’s Odyssey is the foundation of every hero’s journey—a must-read.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonial 3"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"large"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('★★★★★', 'lexionic');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Rich, poetic, and alive with mythology, it defines the essence of classic literature.', 'lexionic');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem"}},"fontSize":"x-small"} -->
<h2 class="wp-block-heading has-x-small-font-size" style="letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('The About\'s Words', 'lexionic');?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":18,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"Blog"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post template copy"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|70","metadata":{"name":"Spacer XL"}} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80","metadata":{"name":"Spacer 2XL"}} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></main>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->