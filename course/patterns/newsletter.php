<?php

/**
 * Title: Newsletter
 * Slug: course/newsletter
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"1.25rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group">
      <!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium","fontFamily":"secondary"} -->
      <h2 class="has-secondary-font-family has-medium-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Newsletter', 'course' ); ?></h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p><?php echo esc_html__( 'Our latest updates in your e-mail.', 'course' ); ?></p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"className":"course-newsletter-sign-up","style":{"spacing":{"padding":{"top":"1.25rem"}}}} -->
      <p class="course-newsletter-sign-up" style="padding-top:1.25rem"><a href="#"><?php echo esc_html__( 'Sign up', 'course' ); ?></a></p>
      <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
