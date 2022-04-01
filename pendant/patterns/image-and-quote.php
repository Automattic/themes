<?php
/**
 * Title: Image & Quote
 * slug: pendant/image-and-quote
 */
?>

<!-- wp:media-text {"align":"full","mediaLink":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/person-with-shadow-on-wall.jpeg'; ?>","mediaType":"image","mediaWidth":40,"mediaSizeSlug":"full","backgroundColor":"secondary"} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile has-secondary-background-color has-background" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/person-with-shadow-on-wall.jpeg'; ?>" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><p>
<?php echo  esc_html__( '"We’re very lucky to be able to write about our passion and interview those whose work we admire."', 'pendant' ); ?>
</p><cite>Marie, editor for PNDNT</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:media-text -->