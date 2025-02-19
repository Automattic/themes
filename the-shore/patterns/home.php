<?php
/**
 * Title: home
 * Slug: the-shore/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-homepage"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"blockGap":"2.8rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"380px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-1.png" alt="<?php esc_attr_e('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.13"}},"textColor":"primary","fontSize":"large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-large-font-size" style="line-height:1.13"><?php esc_html_e('A private compound on the coast, The Shore invites you into an elegant contemporary space that is bright and airy by day, and intriguing by night, lit up with romantic, shimmering lights.', 'the-shore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"width":"400px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_2.jpg" alt="<?php esc_attr_e('A beach umbrella in front of the sea', 'the-shore');?>" style="width:400px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_3.jpg","alt":"Aerial shot of a small tropical island with a hotel between the trees","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-right:6vw;padding-left:6vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('Aerial shot of a small tropical island with a hotel between the trees', 'the-shore');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.13"}},"textColor":"base","fontSize":"large"} -->
<p class="has-text-align-center has-base-color has-text-color has-link-color has-large-font-size" style="line-height:1.13"><?php esc_html_e('Immerse yourself in a luxurious and sophisticated lifestyle amidst the serene beauty of Turks and Caicos, one of the world’s most sought-after destinations.', 'the-shore');?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Rooms"},"style":{"spacing":{"blockGap":"2.8rem","padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Seaview &amp; Deluxe Rooms', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Explore Rooms', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p><?php esc_html_e('Wake up to stunning vistas of the turquoise Caribbean waters. Our rooms provide a tranquil retreat, complete with luxurious bedding, contemporary furnishings, and a private balcony to enjoy the mesmerizing ocean views.', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_4.jpg" alt="<?php esc_attr_e('A beautiful hotel room with views to the sea', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_5.jpg" alt="<?php esc_attr_e('A rainfall shower head on a spa room', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_6.jpg","alt":"A waiter filling up some wine glasses","dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-right:6vw;padding-left:6vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php esc_attr_e('A waiter filling up some wine glasses', 'the-shore');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"300"}},"fontSize":"x-small","fontFamily":"commissioner"} -->
<h2 class="wp-block-heading has-commissioner-font-family has-x-small-font-size" style="font-style:normal;font-weight:300;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('Bars &amp; Restaurant', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size"><?php esc_html_e('Enjoy a cocktail at our stylish bar, or savor a fine dining experience with a backdrop of stunning ocean views.', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color wp-element-button"><?php esc_html_e('Discover Bars &amp; Restaurant', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Banner with gallery"},"style":{"spacing":{"blockGap":"2.8rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"380px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-1.png" alt="<?php esc_attr_e('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.13"}},"textColor":"primary","fontSize":"large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-large-font-size" style="line-height:1.13"><?php esc_html_e('Lounge by our crystal-clear pool, take a leisurely stroll along the powdery white sands, or dive into the warm Caribbean waters. Whether you seek tranquility or excitement, our pool and beach amenities cater to all your desires.', 'the-shore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3.6rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_7.jpg" alt="<?php esc_attr_e('A woman swimming in an infinity pool looking at the sea', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_8.jpg" alt="<?php esc_attr_e('A hotel pool near a tropical forest', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_9.jpg" alt="<?php esc_attr_e('A view of a hotel from the pool', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Banner with CTA"},"style":{"spacing":{"blockGap":"2.8rem"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"380px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line_light.png" alt="<?php esc_attr_e('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"base","fontSize":"x-small","fontFamily":"commissioner"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-commissioner-font-family has-x-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e('The Shore Spa®', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.13"}},"textColor":"primary","fontSize":"large"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-large-font-size" style="line-height:1.13"><?php esc_html_e('<p class="has-text-align-center has-base-color has-text-color has-link-color has-large-font-size" style="line-height:1.13">Experience a holistic approach to wellness in our tranquil spa setting, where every detail is crafted for your ultimate comfort.', 'the-shore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2.4rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_10.jpg" alt="<?php esc_attr_e('The hands of a masseuse working on someone\'s back', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_11.jpg" alt="<?php esc_attr_e('A massage room with two beds with a view to the trees and a pool', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_12.jpg" alt="<?php esc_attr_e('A woman doing a heart sign with her hands, sitting in a pool', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Explore Treatments', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Newsletter"},"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"5vw","right":"5vw"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:2rem;padding-right:5vw;padding-bottom:2rem;padding-left:5vw"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Sign up and get 5% discount', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('To receive updates about exclusive experiences, sign up to our newsletter. Get a 5% discount on your first booking.', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Sign Up', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->