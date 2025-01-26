<?php
/**
 * Title: About Page with Heading, Paragraph and Image
 * Slug: goodskin/about-page
 * Categories: pages
 * Inserter: yes
 */
declare( strict_types = 1 );
?>

<!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"}}} -->
<h2 class="wp-block-heading" style="line-height:1.1">My name is Ava Wells and I’m a skincare lover with a Ph.D. in Pharmaceutical Sciences at the University of London.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}}} -->
<p style="line-height:1.2">Ever since I can remember, I've been fascinated by the intricate workings of the human body and the ways in which science can be harnessed to improve health and well-being. This fascination led me to pursue a Ph.D. in Pharmaceutical Sciences from London, where I became increasingly interested in the intersection of science and skincare. From understanding the role of antioxidants in protecting against environmental damage to exploring the benefits of retinoids in stimulating collagen production, I was captivated by the science behind skincare and its transformative effects on the skin.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"48%"} -->
<div class="wp-block-column" style="flex-basis:48%"><!-- wp:image {"id":206,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-about-image-792x1024.jpg" alt="" class="wp-image-206"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->