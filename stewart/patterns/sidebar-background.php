<?php
/**
 * Title: Sidebar with background color
 * Slug: stewart/sidebar-background
 * Categories: sidebar
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0em","right":"0em","bottom":"0em","left":"0em"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:0em;padding-right:0em;padding-bottom:0em;padding-left:0em"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full">
<img
	src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/contact.jpg'; ?>"
	alt="<?php echo esc_html__( 'An abstract image featuring a brushstroke.', 'stewart' ); ?>"
/>
</figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0em","right":"2em","bottom":"2em","left":"2em"}}}} -->
<div class="wp-block-group" style="padding-top:0em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"gigantic"} /-->

<!-- wp:site-tagline {"textAlign":"left","fontSize":"small"} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}}} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
