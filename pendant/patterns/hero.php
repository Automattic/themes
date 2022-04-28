<?php
/**
 * Title: Home Page Hero
 * slug: pendant/home-hero
 * categories: featured, call-to-action 
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns alignfull"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"calc(1240px / 2)","style":{"spacing":{"padding":{"left":"var(--wp--custom--gap--horizontal)"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-left:var(--wp--custom--gap--horizontal);flex-basis:calc(1240px / 2)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","right":"calc(var(--wp--custom--gap--horizontal)/2)"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group" style="padding-top:100px;padding-right:calc(var(--wp--custom--gap--horizontal)/2);padding-bottom:100px">

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"500"}},"fontSize":"0.9rem"} -->
<p style="font-style:normal;font-weight:500;text-transform:uppercase;letter-spacing:0.1em;font-size:0.9rem"><?php echo esc_html__( 'Featured', 'pendant' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"}}} -->
<h1 style="line-height:1"><?php echo esc_html__( 'October Finds', 'pendant' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link"><?php echo esc_html__( 'Explore', 'pendant' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"width":1000,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/fists-on-chin.jpeg'; ?>" alt="" width="1000"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
