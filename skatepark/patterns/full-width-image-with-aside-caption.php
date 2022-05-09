<?php
/**
 * Title: Full width image with aside caption
 * Slug: skatepark/full-width-image-with-aside-caption
 * Categories: featured, text, images
 */
?>

<!-- wp:image {"align":"full","className":"alignfull size-large is-style-skatepark-aside-caption"} -->
<figure class="wp-block-image alignfull size-large is-style-skatepark-aside-caption"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/skatepark.jpg'; ?>" alt="<?php echo esc_attr__( 'A skateboarder does a grab trick in a bowl-shaped skate park. In the background is a watching crowd, palm trees, and the ocean.', 'skatepark' ); ?>"/></figure>
<!-- /wp:image -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Learn the basics of skating along with a group of your peers. More advanced at skating? Our skateboarding coaches will work with you 1:1 to advance your technique.', 'skatepark' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
