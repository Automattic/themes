<?php
/**
 * Title: Default footer block pattern
 * Slug: appleton/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"color":{"text":"#fffffe","background":"#160e0e"},"spacing":{"padding":{"top":"6vw","bottom":"6vw","right":"30px","left":"30px"}},"typography":{"fontSize":"15px"}},"layout":{"inherit":false,"contentSize":"1200px"}} -->
<div class="wp-block-group has-text-color has-background" style="background-color:#160e0e;color:#fffffe;font-size:15px;padding-top:6vw;padding-right:30px;padding-bottom:6vw;padding-left:30px"><!-- wp:columns {"align":"wide"} -->
  <div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
    <div class="wp-block-column" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
      <div class="wp-block-group"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","letterSpacing":"4px","fontWeight":"500","fontSize":"1.2rem","textTransform":"uppercase"}},"textColor":"background"} /-->

        <!-- wp:paragraph -->
        <p><?php echo esc_html__('Photography portfolio website of a nature photographer, John Appleton.', 'appleton'); ?></p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
        <div class="wp-block-column" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
          <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"4px","fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"color":{"text":"#666666"}}} -->
            <p class="has-text-color" style="color:#666666;font-size:14px;font-style:normal;font-weight:500;letter-spacing:4px"><?php echo esc_html__('ADDRESS', 'appleton'); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p><?php
              echo sprintf( '%1$s<br>%2$s',
              esc_html( '123 Example St,', 'appleton' ),
              esc_html( 'CA 12345-6789', 'appleton' )
            );
            ?></p>
          <!-- /wp:paragraph --></div>
          <!-- /wp:group --></div>
          <!-- /wp:column -->

          <!-- wp:column {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
          <div class="wp-block-column" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","letterSpacing":"4px"},"color":{"text":"#666666"}}} -->
            <p class="has-text-color" style="color:#666666;font-size:14px;font-style:normal;font-weight:500;letter-spacing:4px"><?php echo esc_html__('GET IN TOUCH', 'appleton'); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","showLabels":true,"size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <ul class="wp-block-social-links has-normal-icon-size has-visible-labels has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://www.instagram.com","service":"instagram","label":"Instagram"} /-->

              <!-- wp:social-link {"url":"https://www.deviantart.com","service":"deviantart"} /-->

              <!-- wp:social-link {"url":"https://www.flickr.com","service":"flickr"} /--></ul>
              <!-- /wp:social-links --></div>
              <!-- /wp:column --></div>
              <!-- /wp:columns --></div>
              <!-- /wp:group -->
