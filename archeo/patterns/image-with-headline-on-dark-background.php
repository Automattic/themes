<?php
/**
 * Title: Image with headline on dark background
 * Slug: archeo/image-with-headline-on-dark-background
 * Categories: images
 */
?>

<!-- wp:media-text {"mediaPosition":"right","mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/figure-gigantesque.jpg","mediaType":"image","imageFill":false,"backgroundColor":"foreground","textColor":"background"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile has-background-color has-foreground-background-color has-text-color has-background"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/figure-gigantesque.jpg" alt="<?php esc_attr_e( 'Photo of gigantic figure at Izamal', 'archeo' ); ?>" /></figure><div class="wp-block-media-text__content">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"clamp(30px, 4vw, 80px)","right":"clamp(30px, 4vw, 80px)","bottom":"clamp(30px, 4vw, 80px)","left":"clamp(30px, 4vw, 80px)"}}}} -->
	<div class="wp-block-group" style="padding-top:clamp(30px, 4vw, 80px);padding-right:clamp(30px, 4vw, 80px);padding-bottom:clamp(30px, 4vw, 80px);padding-left:clamp(30px, 4vw, 80px)">
		<!-- wp:paragraph {"placeholder":"Content…","style":{"typography":{"fontStyle":"italic","fontWeight":"100","lineHeight":"1.4"}},"fontSize":"large"} -->
		<p class="has-large-font-size" style="font-style:italic;font-weight:100;line-height:1.4"><?php echo wp_kses_post( __( 'Gigantic figure at <br>Izamal; at the <br>bottom of the <br>second pyramid.', 'archeo' ) ); ?></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
</div><!-- /wp:media-text -->
