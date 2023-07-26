<?php
/**
 * Title: A 404 page
 * Slug: snd/404
 * Inserter: no
 */
?>
<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-left has-large-font-size">
	<?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'snd' ); ?>
</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'snd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search...', 'snd' ); ?>","buttonUseIcon":true} /-->