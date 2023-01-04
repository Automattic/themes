<?php
/**
 * Title: Bold newsletter signup
 * Slug: lettre/newsletter-bold
 * Categories: featured, newsletter
 */
?>

<!-- wp:cover {"customOverlayColor":"#cdffe8","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#cdffe8"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1.5em"}}}} -->
<div class="wp-block-group" style="padding-bottom:1.5em"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"max(48px, 10vw)","lineHeight":"1"}},"textColor":"foreground"} -->
<p class="has-text-align-left has-foreground-color has-text-color" style="font-size:max(48px, 10vw);line-height:1"><strong><?php echo esc_html__( 'Sign up for updates', 'lettre' ); ?></strong></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:jetpack/subscriptions {"subscribePlaceholder":"<?php echo esc_html__( 'Email Address', 'lettre' ); ?>","buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"<?php echo esc_html__( 'Subscribe', 'lettre' ); ?>","buttonBackgroundColor":"foreground","textColor":"secondary","fontSize":"50px","customFontSize":"50px","borderRadius":0,"borderWeight":8,"borderColor":"foreground","padding":40,"spacing":40,"className":"is-style-split"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
