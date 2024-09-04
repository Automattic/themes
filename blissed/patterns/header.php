<?php declare( strict_types = 1 ); ?>

<?php
// Get the homepage URL to create page jumps.
$url = esc_url(home_url( '/')); 
?>

<?php
/**
 * Title: header
 * Slug: blissed/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><a href="<?php echo $url; ?>#ceremony" data-type="internal" data-id="#ceremony"><?php esc_html_e('Ceremony', 'blissed');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><a href="<?php echo $url; ?>#reception" data-type="internal" data-id="#reception"><?php esc_html_e('Reception', 'blissed');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><a href="<?php echo $url; ?>#accomodations" data-type="internal" data-id="#accomodations"><?php esc_html_e('Accommodations', 'blissed');?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><a href="<?php echo $url; ?>#registry" data-type="internal" data-id="#registry"><?php esc_html_e('Wedding Registry', 'blissed');?></a></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->