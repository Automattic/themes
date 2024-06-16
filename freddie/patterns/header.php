<?php
/**
 * Title: Default Header
 * Slug: freddie/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group">
	<!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}}}} /-->

	<!-- wp:verse -->
	<pre class="wp-block-verse"><?php echo wp_kses_post( __( 'It&rsquo;s a beautiful day.<br>The sun is shining.<br>I feel good.<br>And no one&rsquo;s gonna stop me now.', 'freddie' ) ); ?></pre>
	<!-- /wp:verse -->
</div>
<!-- /wp:group -->
