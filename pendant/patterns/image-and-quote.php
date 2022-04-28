<?php
/**
 * Title: Image & Quote
 * slug: pendant/image-and-quote
 * categories: featured, quotes, text
 */
?>

<!-- wp:media-text {"align":"full","mediaLink":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/person-with-shadow-on-wall.jpeg'; ?>","mediaType":"image","mediaWidth":40,"mediaSizeSlug":"full","backgroundColor":"primary"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-center has-primary-background-color has-background" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/person-with-shadow-on-wall.jpeg'; ?>" alt=""/></figure><div class="wp-block-media-text__content">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"40px","left":"30px"}}}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:40px;padding-left:30px"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><p>
<?php echo  esc_html__( '"We’re very lucky to be able to write about our passion and interview those whose work we admire."', 'pendant' ); ?>
</p><cite><?php echo esc_html__( 'Marie, editor for PNDNT', 'pendant' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text -->