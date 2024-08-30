<?php
/**
 * Title: home
 * Slug: the-shore/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-homepage"} /-->

<!-- wp:group {"metadata":{"name":"Banner"},"style":{"spacing":{"blockGap":"2.8rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"380px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-1.png" alt="<?php echo __('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
<h2 class="wp-block-heading alignwide has-text-align-center" style="font-style:normal;font-weight:300"><?php echo __('A private compound on the coast, The Shore invites you into an elegant contemporary space that is bright and airy by day, and intriguing by night, lit up with romantic, shimmering lights.', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:image {"width":"400px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_2.jpg" alt="<?php echo __('A beach umbrella in front of the sea', 'the-shore');?>" style="width:400px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_3.jpg","dimRatio":40,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-right:6vw;padding-left:6vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo __('Aerial shot of a small tropical island with a hotel between the trees', 'the-shore');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_3.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:300"><?php echo __('Immerse yourself in a luxurious and sophisticated lifestyle amidst the serene beauty of Turks and Caicos, one of the world’s most sought-after destinations.', 'the-shore');?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Rooms"},"style":{"spacing":{"blockGap":"2.8rem","padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Seaview &amp; Deluxe Rooms', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo __('Explore Rooms', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p><?php echo __('Wake up to stunning vistas of the turquoise Caribbean waters. Our rooms provide a tranquil retreat, complete with luxurious bedding, contemporary furnishings, and a private balcony to enjoy the mesmerizing ocean views.', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_4.jpg" alt="<?php echo __('A beautiful hotel room with views to the sea', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_5.jpg" alt="<?php echo __('A rainfall shower head on a spa room', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_6.jpg","dimRatio":20,"overlayColor":"black","isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="padding-right:6vw;padding-left:6vw;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo __('A waiter filling up some wine glasses', 'the-shore');?>" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em"}},"fontSize":"x-small","fontFamily":"commissioner"} -->
<p class="has-commissioner-font-family has-x-small-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo __('Bars &amp; Restaurant', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left has-large-font-size" style="font-style:normal;font-weight:300"><?php echo __('Enjoy a cocktail at our stylish bar, or savor a fine dining experience with a backdrop of stunning ocean views.', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-link-color wp-element-button"><?php echo __('Discover Bars &amp; Restaurant', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Banner with gallery"},"style":{"spacing":{"blockGap":"2.8rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"380px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line-1.png" alt="<?php echo __('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
<h2 class="wp-block-heading alignwide has-text-align-center" style="font-style:normal;font-weight:300"><?php echo __('Lounge by our crystal-clear pool, take a leisurely stroll along the powdery white sands, or dive into the warm Caribbean waters. Whether you seek tranquility or excitement, our pool and beach amenities cater to all your desires.', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"3.6rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_7.jpg" alt="<?php echo __('A woman swimming in an infinity pool looking at the sea', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_8.jpg" alt="<?php echo __('A hotel pool near a tropical forest', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_9.jpg" alt="<?php echo __('A view of a hotel from the pool', 'the-shore');?>"/></figure>
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
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/line_light.png" alt="<?php echo __('', 'the-shore');?>" style="width:380px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small","fontFamily":"commissioner"} -->
<p class="has-text-align-center has-commissioner-font-family has-x-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php echo __('The Shore Spa®', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:300"><?php echo __('Experience a holistic approach to wellness in our tranquil spa setting, where every detail is crafted for your ultimate comfort.', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2.4rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_10.jpg" alt="<?php echo __('The hands of a masseuse working on someone\'s back', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_11.jpg" alt="<?php echo __('A massage room with two beds with a view to the trees and a pool', 'the-shore');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hotel_image_12.jpg" alt="<?php echo __('A woman doing a heart sign with her hands, sitting in a pool', 'the-shore');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background has-link-color wp-element-button"><?php echo __('Explore Treatments', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Newsletter"},"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"5vw","right":"5vw"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="padding-top:2rem;padding-right:5vw;padding-bottom:2rem;padding-left:5vw"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Sign up and get 5% discount', 'the-shore');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('To receive updates about exclusive experiences, sign up to our newsletter. Get a 5% discount on your first booking.', 'the-shore');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo __('Sign Up', 'the-shore');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->