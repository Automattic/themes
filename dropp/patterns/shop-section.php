<?php
/**
 * Title: Shop Section
 * Slug: dropp/shop-section
 * Categories: featured
 * Inserter: yes
 */
?>
<!-- wp:group {"metadata":{"name":"Products"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"15rem","fontStyle":"italic","fontWeight":"900","letterSpacing":"-0.12em","textTransform":"uppercase"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:15rem;font-style:italic;font-weight:900;letter-spacing:-0.12em;text-transform:uppercase"><?php esc_html_e('Shopp', 'dropp');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/post-7-1.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e('A-Navy Varsity Jacket', 'dropp');?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/post-5.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e('Techwear+ Backpack', 'dropp');?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/post-11.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e('Ghask Beanie', 'dropp');?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/post-9.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e('Rainno Waterproof Shorts', 'dropp');?></figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/post-12.webp" alt="" class="" style="aspect-ratio:1;object-fit:cover"/><figcaption class="wp-element-caption"><?php esc_html_e('AIRS® Burgundy Hat', 'dropp');?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_attr_x( 'Peep the rest', 'Button text. Verb.', 'dropp' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
