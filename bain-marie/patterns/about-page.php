<?php
/**
 * Title: About Page
 * Slug: bain-marie/about-page
 * Categories: featured, page
 * Inserter: yes
 */
?>
<!-- wp:group {"metadata":{"name":"About page"},"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"aspectRatio":"1","align":"full"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"},"margin":{"top":"2rem","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-top:2rem;margin-bottom:var(--wp--preset--spacing--40);padding-right:6vw;padding-left:6vw"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('About Me', 'bain-marie');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Hello dear foodies! My name is Jodie and I\'m the author and creator behind Bain Marie.', 'bain-marie');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('What began as a simple passion project over a decade ago in 2008, during my time as a marketing executive, has blossomed into a thriving culinary empire, captivating audiences worldwide with delectable recipes every month. My work has been celebrated by leading publications such as Bon Appétit, Food &amp; Wine and Martha Stewart Living.', 'bain-marie');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:6vh;padding-bottom:6vh"><!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" id="h-i-love-food"><?php esc_html_e('Sign up for email updates', 'bain-marie');?></h2>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-form {"className":"is-style-animated","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"right":"0","left":"0"}}}} -->
<div class="wp-block-jetpack-contact-form is-style-animated" style="margin-right:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:jetpack/field-email {"required":true,"borderWidth":1,"labelFontSize":"1.125rem","fieldFontSize":"1rem","inputColor":"#f5f5e9","fieldBackgroundColor":"#561331","borderColor":"#f5f5e9","shareFieldAttributes":false} /-->

<!-- wp:jetpack/button {"element":"button","text":"Sign Up","lock":{"remove":true}} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6vh;padding-bottom:6vh"><!-- wp:heading -->
<h2 class="wp-block-heading" id="h-i-love-food"><?php esc_html_e('I love food.', 'bain-marie');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('I\'m passionate about sharing mouthwatering recipes that reflect my love for wholesome and delicious food. Every recipe you find on my blog is a reflection of what I genuinely enjoy eating in my everyday life. If it doesn\'t pass the "real-life" test, it won\'t make it onto my blog. My mission is to ignite your culinary creativity and inspire you to embark on flavorful culinary adventures, whether you\'re cooking for yourself, your loved ones, or hosting a gathering with friends. My ultimate goal? To have you eagerly anticipating the end of your workday, eagerly awaiting the opportunity to dive into one of my recipes as soon as you step foot in your kitchen at 5 pm.', 'bain-marie');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:gallery {"columns":2,"randomOrder":true,"linkTo":"none","sizeSlug":"full","align":"wide"} -->
<figure class="wp-block-gallery alignwide has-nested-images columns-2 is-cropped"><!-- wp:image {"id":168,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-3-scaled.jpg" alt="" class="wp-image-168"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":81,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-post-2-scaled.jpg" alt="" class="wp-image-81"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":64,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/danube-post-1-scaled.jpg" alt="" class="wp-image-64"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->