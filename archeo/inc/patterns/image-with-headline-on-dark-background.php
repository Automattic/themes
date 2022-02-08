<?php
/**
 * Image with headline on dark background
 */
return array(
	'title'      => __( 'Image with headline on dark background', 'archeo' ),
	'categories' => array( 'pages' ),
	'content'    => '<!-- wp:media-text {"mediaPosition":"right","mediaLink":"' . esc_url( get_template_directory_uri() ) . '/assets/images/figure-gigantesque.jpg","mediaType":"image","imageFill":false,"backgroundColor":"foreground","textColor":"background"} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/figure-gigantesque.jpg" alt="Photo of gigantic figure at Izamal" class="size-full"/></figure><div class="wp-block-media-text__content">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"clamp(30px, 4vw, 80px)","right":"clamp(30px, 4vw, 80px)","bottom":"clamp(30px, 4vw, 80px)","left":"clamp(30px, 4vw, 80px)"}}}} -->
	<div class="wp-block-group" style="padding-top:clamp(30px, 4vw, 80px);padding-right:clamp(30px, 4vw, 80px);padding-bottom:clamp(30px, 4vw, 80px);padding-left:clamp(30px, 4vw, 80px)">
	<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontStyle":"italic","fontWeight":"300","lineHeight":"1.5"}},"fontSize":"large"} -->
	<p class="has-large-font-size" style="font-style:italic;font-weight:300;line-height:1.5">' . wp_kses_post( __( 'Figure gigantesque, <br>à Izamal; au bas de la seconde pyramide', 'archeo' ) ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div></div>
	<!-- /wp:media-text -->',
);