<?php
/**
 * Title: Media & Text 
 * slug: pendant/media-and-text
 * categories: featured, media, text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"40px","bottom":"50px"}}},"backgroundColor":"foreground","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull has-background-color has-foreground-background-color has-text-color has-background" style="margin-top:0px;padding-top:40px;padding-bottom:50px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="alignwide"><?php echo  esc_html__( 'About', 'pendant' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/person-in-dress-at-shore.jpg'; ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4><?php echo  esc_html__( 'Mia Moore, Jewelry lover', 'pendant' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><em><?php echo  esc_html__( '“The more I learn about jewelry and dive into its history, the more I love it. Getting to know the meanings behind objects in particular moments in time, how they translated into status, wealth or power. Jewelry has always been a way to communicate and distinguish and with the evolution of society, it turned into another way of expression, like clothing. I’m passionate about how we use it to express who we really are.”', 'pendant' ); ?></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->