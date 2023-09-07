<?php
/**
 * Title: Default header
 * Slug: tenaz/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40)">
	<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"164px"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:164px">
				<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

					<!-- wp:social-link {"url":"#","service":"youtube"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":""} -->
			<div class="wp-block-column is-vertically-aligned-center"></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"300px"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:300px">
				<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"top":{"color":"#4a4a4a","style":"solid","width":"1px"},"right":{"color":"#4a4a4a","style":"solid","width":"1px"},"bottom":{"color":"#4a4a4a","style":"solid","width":"1px"},"left":{"color":"#4a4a4a","style":"solid","width":"1px"},"radius":"0px"}},"backgroundColor":"contrast","textColor":"base"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:site-logo {"width":64,"align":"center"} /-->

	<!-- wp:site-title {"textAlign":"center","align":"wide"} /-->

	<!-- wp:group {"align":"full","style":{"border":{"top":{"color":"var:preset|color|secondary","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|secondary","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"},"margin":{"top":"1.5rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-style:solid;border-bottom-width:1px;margin-top:1.5rem;padding-top:1rem;padding-bottom:1rem">
		<!-- wp:navigation {"align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}},"typography":[]},"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
