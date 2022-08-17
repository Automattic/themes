<?php
/**
 * Title: Link in Bio with fixed background image
 * Slug: lynx/link-in-bio-fixed-background
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/hiker.jpg'; ?>","hasParallax":true,"dimRatio":50,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/hiker.jpg'; ?>)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"inherit":false,"contentSize":"400px"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:heading {"className":"has-custom-font","fontFamily":"fira-sans"} -->
<h2 class="has-fira-sans-font-family has-custom-font"><?php echo  esc_html__( 'Xue Tengfei', 'lynx' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size">
	<?php echo  esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a neque vestibulum, tincidunt mi ut, fringilla purus. Etiam elementum felis rhoncus orci pellentesque tempus.', 'lynx' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"background","width":100,"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link has-background-color has-text-color wp-element-button"><?php echo  esc_html__( 'Get in touch', 'lynx' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->