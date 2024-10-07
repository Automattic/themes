<?php
/**
 * Title: Text on right with image on left
 * Slug: jenn/text-right-image-left
 * Categories: banner, about, featured
 * Viewport width: 1400
 */
?>
<!-- wp:media-text {"mediaId":181,"mediaLink":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/jenn-about","mediaType":"image","mediaWidth":60,"imageFill":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"base-2"} -->
<div class="wp-block-media-text is-stacked-on-mobile is-image-fill has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;grid-template-columns:60% auto"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/jenn-about-1024x965.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/jenn-about-1024x965.jpg" alt="" class="wp-image-181 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('About Jenn', 'jenn');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Yoga has been my constant companion since I embraced it in my twenties. Over the last five decades, I’ve had the privilege of immersing myself in various yoga styles: Kundalini yoga, Power yoga, and Bikram yoga.', 'jenn');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Read More', 'jenn');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->
