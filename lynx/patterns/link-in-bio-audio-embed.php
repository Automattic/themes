<?php
/**
 * Title: Link in Bio with audio embed
 * Slug: lynx/link-in-bio-audio-embed
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/abstract-3d-shape.jpg'; ?>","dimRatio":0,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/abstract-3d-shape.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"84px","fontStyle":"normal","fontWeight":"700","lineHeight":0.9}}} -->
<h2 class="has-text-align-center" style="font-size:84px;font-style:normal;font-weight:700;line-height:0.9"><?php echo  esc_html__( 'Ose Maiko', 'lynx' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"border":{"radius":"10px"}},"backgroundColor":"black"} -->
<div class="wp-block-group has-black-background-color has-background" style="border-radius:10px"><!-- wp:embed /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><strong><?php echo  esc_html__( 'Listen to my new album', 'lynx' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"style":{"border":{"radius":"10px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button" style="border-radius:10px"><?php echo  esc_html__( 'iTunes', 'lynx' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"style":{"border":{"radius":"10px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button" style="border-radius:10px"><?php echo  esc_html__( 'Soundcloud', 'lynx' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"style":{"border":{"radius":"10px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button" style="border-radius:10px"><?php echo  esc_html__( 'Spotify', 'lynx' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"black","textColor":"white","width":50,"style":{"border":{"radius":"10px"}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button" style="border-radius:10px"><?php echo  esc_html__( 'Stitcher', 'lynx' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:social-links {"iconColor":"black","iconColorValue":"#000000","iconBackgroundColor":"background","iconBackgroundColorValue":"#ffffff","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color">
	<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

	<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

	<!-- wp:social-link {"url":"#","service":"spotify"} /-->

	<!-- wp:social-link {"url":"#","service":"soundcloud"} /-->
</ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->