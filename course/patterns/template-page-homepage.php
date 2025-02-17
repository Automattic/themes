<?php
/**
 * Title: Homepage
 * Slug: course/homepage
 * Keywords: starter
 * Template Types:: front-page, index, home
 * Inserter: no
 * Description: Homepage with a hero section, featured course, news, and testimonials.
 *
 */

?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"overlayColor":"background","isUserOverlayColor":true,"minHeight":710,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:710px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","textColor":"background","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center has-background-color has-text-color" style="flex-basis:40%"><!-- wp:heading {"level":1,"textColor":"primary"} -->
<h1 class="wp-block-heading has-primary-color has-text-color">Grow Your Skills With A New Course</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"primary"} -->
<p class="has-primary-color has-text-color">Course helps you grow, have more career opportunities, and personal fulfilment.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"background"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background wp-element-button">Start Learning Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default","style":{"border":{"width":"1px","radius":"4px"}},"borderColor":"primary"} -->
<figure class="wp-block-image size-large has-custom-border is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/headerimage.jpg" alt="" class="has-border-color has-primary-border-color" style="border-width:1px;border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-background-color has-primary-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"verticalAlignment":"bottom","width":"66.5%","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:0px;padding-left:0px;flex-basis:66.5%"><!-- wp:image {"id":9510,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"bottomLeft":"4px","bottomRight":"4px","topLeft":"4px","topRight":"4px"},"width":"1px"}},"borderColor":"background"} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/micah-williams-htmaobx98ro-unsplash.jpg" alt="" class="has-border-color has-background-border-color wp-image-9510" style="border-width:1px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"33.5%","style":{"spacing":{"padding":{"right":"1.5rem","left":"1.5rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:1.5rem;padding-left:1.5rem;flex-basis:33.5%"><!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|background","width":"1px"}},"spacing":{"padding":{"left":"20px"},"margin":{"bottom":"40px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--background);border-left-width:1px;margin-bottom:40px;padding-left:20px"><!-- wp:heading {"className":"sensei-pattern-heading","style":{"typography":{"textTransform":"uppercase","lineHeight":"1"},"spacing":{"padding":{"top":"0px"}}},"textColor":"background","fontSize":"medium"} -->
<h2 class="wp-block-heading sensei-pattern-heading has-background-color has-text-color has-medium-font-size" style="padding-top:0px;line-height:1;text-transform:uppercase"><strong>Featured Course</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"max(48px, 5.5vw)","lineHeight":0.9,"fontStyle":"normal","fontWeight":"700"}}} -->
<h1 class="wp-block-heading" style="font-size:max(48px, 5.5vw);font-style:normal;font-weight:700;line-height:0.9">fashion design With Wang</h1>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"67%","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"600px"}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:67%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}}} -->
<p style="line-height:1.5">Born and raised in New York, Wang Cheung was exposed to a myriad of cultures and design expressions. She developed an interest in graphic and audiovisual design from a young age but it was Fashion Design the one that stole her heart and took her to Parsons as soon as she finished school. She has since then worked with many renowned brands and artists and has very recently created her own label, “Stillness”.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button">Take Course</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33%","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"2rem"} -->
<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sensei-blog-posts-pattern","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"20px","right":"20px"},"blockGap":"0px"}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull sensei-blog-posts-pattern has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:80px;padding-right:20px;padding-bottom:80px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px"}}},"textColor":"primary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group has-primary-color has-text-color" style="padding-bottom:40px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"1px","color":"var:preset|color|primary"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--primary);border-left-width:1px;padding-left:20px"><!-- wp:heading {"className":"sensei-pattern-heading","style":{"typography":{"textTransform":"uppercase","lineHeight":"1"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"medium"} -->
<h2 class="wp-block-heading sensei-pattern-heading has-medium-font-size" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;line-height:1;text-transform:uppercase">Sensei News</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"sensei-pattern-header-link"} -->
<p class="sensei-pattern-header-link"><a href="https://senseilms.com/blog">Visit the Sensei blog</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}},"color":{"text":"#000000"}},"backgroundColor":"background","layout":{"inherit":false}} -->
<div class="wp-block-group has-background-background-color has-text-color has-background" style="color:#000000;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:heading {"style":{"typography":{"lineHeight":"1","textTransform":"none"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="line-height:1;text-transform:none"><a href="https://senseilms.com/how-do-we-beat-the-ai-robots/">Course Creators: How Do We Beat The AI Robots?</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"right","style":{"border":{"width":"1px","radius":"4px"}},"borderColor":"primary"} -->
<figure class="wp-block-image alignright size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/christin-hume.jpg" alt="" class="has-border-color has-primary-border-color" style="border-width:1px;border-radius:4px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:rss {"columns":3,"blockLayout":"grid","feedURL":"https://senseilms.com/feed","itemsToShow":6} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"sensei-pattern-mail-list","style":{"spacing":{"padding":{"top":"0px","bottom":"100px","right":"20px","left":"20px"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull sensei-pattern-mail-list" style="padding-top:0px;padding-right:20px;padding-bottom:100px;padding-left:20px"><!-- wp:group {"className":"is-style-group-left-border","style":{"spacing":{"padding":{"left":"38px","top":"20px","bottom":"20px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|foreground"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group is-style-group-left-border" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--foreground);padding-top:20px;padding-bottom:20px;padding-left:38px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1","textTransform":"uppercase"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontFamily":"secondary"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-font-family" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;line-height:1;text-transform:uppercase">Keep track of the latest<br>news and HelpFUL<br>SENSEI INFORMATION. </h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right","verticalAlignment":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"8px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background wp-element-button" href="https://senseilms.com/mailing-list/" style="border-radius:8px">Join Our Mailing List</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"120px","right":"20px","left":"20px"},"blockGap":"0px"}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="padding-top:80px;padding-right:20px;padding-bottom:120px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"padding":{"left":"20px","bottom":"0px"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"color":"var:preset|color|tertiary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--tertiary);border-left-width:1px;padding-bottom:0px;padding-left:20px"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","lineHeight":"1","letterSpacing":"0.01em"},"spacing":{"padding":{"top":"0px"}}},"fontSize":"medium","fontFamily":"secondary"} -->
<h3 class="wp-block-heading has-secondary-font-family has-medium-font-size" style="padding-top:0px;letter-spacing:0.01em;line-height:1;text-transform:uppercase">What students say</h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"35px","left":"35px"},"padding":{"top":"40px"}}}} -->
<div class="wp-block-columns" style="padding-top:40px"><!-- wp:column {"verticalAlignment":"bottom","width":"41%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:41%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px","width":"1px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/testimonial.png" alt="" style="border-width:1px;border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"lineHeight":"1"}},"fontSize":"x-large","fontFamily":"secondary"} -->
<h2 class="wp-block-heading has-secondary-font-family has-x-large-font-size" style="margin-bottom:40px;line-height:1">“I always wanted to write, and thanks to Course, I got it right. My writing is clearer, and I can finally get my message across.”</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1","letterSpacing":"0.02em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.02em;line-height:1">Christopher Brown</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-x-small-font-size","style":{"typography":{"lineHeight":"1","letterSpacing":"0.02em"},"spacing":{"padding":{"top":"10px"},"margin":{"top":"0px"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:0px;padding-top:10px;letter-spacing:0.02em;line-height:1">Founder at BeautifulWriting.com</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->