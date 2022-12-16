<?php
/**
 * Title: A 404 page
 * Slug: adventurer/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"16vh","bottom":"16vh"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<main class="wp-block-group" style="margin-top:16vh;margin-bottom:16vh">
    <!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"4.4rem"}}} -->
    <h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="font-size:4.4rem"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'adventurer' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'adventurer' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:search {"label":"","showLabel":false,"placeholder":"E.g. \u0022Botswana\u0022"} /-->
</main>
<!-- /wp:group -->