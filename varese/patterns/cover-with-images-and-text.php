<?php
/**
 * Title: Cover with images and text
 * Slug: varese/cover-with-images-and-text
 * Categories: images, text
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/pattern.png'; ?>","id":1901,"isRepeated":true,"dimRatio":60,"overlayColor":"background","isDark":false,"style":{"spacing":{"padding":{"top":"60px","right":"0px","bottom":"0px","left":"0px"},"margin":{"bottom":"60px","top":"0px"}}}} -->
<div class="wp-block-cover is-light is-repeated" style="margin-top:0px;margin-bottom:60px;padding-top:60px;padding-right:0px;padding-bottom:0px;padding-left:0px"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-60 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-1901 is-repeated" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/pattern.png'; ?>)"></div>
<div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"blockGap":"50px","padding":{"bottom":"80px","right":"30px","left":"30px"}}},"layout":{"contentSize":"800px"}} -->
<div class="wp-block-group" style="padding-right:30px;padding-bottom:80px;padding-left:30px"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"body-text","fontSize":"medium"} -->
<p class="has-text-align-center has-body-text-color has-text-color has-medium-font-size"><?php echo esc_html__( 'Located in the heart of 5th Avenue, Varese is a casual yet elegant restaurant, serving authentic cuisine from Schiranna, complimented by fine wine selections from around the world. Enjoy our indoor or outdoor dining options with friends and family.', 'varese' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"align":"center","style":{"spacing":{"padding":{"right":"60px","left":"60px"}}}} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link wp-element-button" style="padding-right:60px;padding-left:60px"><?php echo esc_html__( 'Book a Table', 'varese' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/row-1.jpg'; ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/row-2.jpg'; ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/row-3.jpg'; ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/row-4.jpg'; ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/row-5.jpg'; ?>" alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->