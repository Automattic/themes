<?php
/**
 * Title: sidebar
 * Slug: onyxpulse/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":""},"border":{"width":"1px"},"layout":{"rowSpan":"","columnSpan":""}},"borderColor":"theme-4","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-theme-4-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php echo __('About', 'onyxpulse');?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo __('Welcome to OnyxPulse, your premier source for all things Health Goth. Here, we blend the edges of technology, fashion, and fitness into a seamless narrative that both inspires and informs. Dive deep into the monochrome world of OnyxPulse, where cutting-edge meets street goth, and explore the pulse of a subculture defined by futurism and style.', 'onyxpulse');?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":""},"border":{"width":"1px"},"layout":{"rowSpan":"","columnSpan":""}},"borderColor":"theme-4","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-theme-4-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo __('Categories', 'onyxpulse');?></h3>
				<!-- /wp:heading -->

				<!-- wp:categories /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo __('Links', 'onyxpulse');?></h3>
				<!-- /wp:heading -->

				<!-- wp:list -->
				<ul>
					<!-- wp:list-item -->
					<li><?php echo __('<a href="https://www.tumblr.com/tagged/health%20goth">Health Goth on Tumblr</a>', 'onyxpulse');?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo __('<a href="https://www.instagram.com/explore/tags/healthgoth/">Health Goth on Instagram</a>', 'onyxpulse');?></li>
					<!-- /wp:list-item -->

					<!-- wp:list-item -->
					<li><?php echo __('<a href="https://www.pinterest.com/search/pins/?q=health%20goth&rs=typed">Health Goth on Pinterest</a>', 'onyxpulse');?></li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":""},"border":{"width":"1px"},"layout":{"rowSpan":"","columnSpan":""}},"borderColor":"theme-4","layout":{"type":"default"}} -->
	<div class="wp-block-group has-border-color has-theme-4-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><?php echo __('Search', 'onyxpulse');?></h3>
		<!-- /wp:heading -->

		<!-- wp:search {"showLabel":false,"placeholder":"<?php echo __('Search', 'onyxpulse');?>...","buttonUseIcon":true} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
