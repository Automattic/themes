<?php
/**
 * Background Video
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Background video', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"url":"' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4","dimRatio":40,"overlayColor":"background","backgroundType":"video","minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}}} -->
					<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-bottom-left" style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px;min-height:100vh"><span aria-hidden="true" class="has-background-background-color has-background-dim-40 wp-block-cover__gradient-background has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="' . get_stylesheet_directory_uri() . '/assets/videos/fish.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:heading {"textColor":"foreground","fontSize":"large"} -->
					<h2 class="has-foreground-color has-text-color has-large-font-size">' . esc_html__( 'Plenty of fish in the sea', 'videomaker' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"foreground"} -->
					<p class="has-foreground-color has-text-color">' . esc_html__( 'A film about finding what you’re looking for.', 'videomaker' ) . '</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover -->',
);