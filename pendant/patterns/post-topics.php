<?php
/**
 * Title: Posts and Topics
 * slug: pendant/posts-topics
 */
?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"60px","padding":{"top":"80px","bottom":"80px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:80px;padding-bottom:80px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":4,"fontSize":"large"} -->
<h4 class="has-large-font-size"><?php echo esc_html__( 'Latest Interviews', 'pendant' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/jewelery-making-1.jpeg'; ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html__( 'Q&amp;A with Lana DeVito, Jewelry designer', 'pendant' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/jewelery-making-2.jpeg'; ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4><?php echo esc_html__( 'Q&amp;A with Andrew Holsen, handmaker', 'pendant' ); ?></h4>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%","layout":{"inherit":false}} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"large"} -->
<h2 class="has-large-font-size" style="margin-bottom:20px"><?php echo esc_html__( 'Popular Topics', 'pendant' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","lineHeight":"2","letterSpacing":"0.1em"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:2;text-transform:uppercase;letter-spacing:0.1em"><?php echo wp_kses_post( 'rings<br>engagement/wedding rings<br>earrings<br>bracelets<br>necklaces<br>pendants<br>antique &amp; vintage jewelry<br>watches<br>24k GOLD<br>jewelry books<br>museum collections<br>interviews', 'pendant' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
