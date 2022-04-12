<?php
/**
 * Title: Sidebar with introduction
 * Slug: stewart/sidebar-introduction
 * Categories: sidebar
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0em","right":"0em","bottom":"0em","left":"0em"}},"border":{"width":"1px"}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="border-width:1px;padding-top:0em;padding-right:0em;padding-bottom:0em;padding-left:0em"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/about.jpg'; ?>" alt="<?php echo esc_html__( 'A collage featuring the portrait of a woman.', 'stewart' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0em","right":"2em","bottom":"2em","left":"2em"}}}} -->
<div class="wp-block-group" style="padding-top:0em;padding-right:2em;padding-bottom:2em;padding-left:2em"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"gigantic"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">
<?php
	echo esc_html__( 'Welcome to the blog! I’m an artist and author who writes about her process and inspiration. Follow along as I explore new mediums, submit my work to galleries, and ultimately pursue a career in art.', 'stewart' );
?>
</p>
<!-- /wp:paragraph -->

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
