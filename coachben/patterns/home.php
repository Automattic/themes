<?php
/**
 * Title: home
 * Slug: coachben/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Hero"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Discover the power of Coaching with %1$sBen Oatts%2$s', 'coachben' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">', '</mark>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_ic_individuals.png" alt="" style="aspect-ratio:1;object-fit:cover;width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Executive Coaching Sessions', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Our program is tailored to meet the unique needs of each individual, providing one-on-one guidance and support.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_ic_groups.png" alt="" style="object-fit:cover;width:40px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Group Coaching Sessions', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('The program brings together individuals with similar challenges and provides a supportive personal and professional development environment.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"40px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_ic_remote.png" alt="" style="aspect-ratio:1;object-fit:cover;width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Video Coaching Sessions', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Our experienced coaches conduct one-on-one sessions via video conferencing, ensuring a seamless and engaging experience.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Cover Image"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_stocksnap_HGLRYTKVWL.jpg","dimRatio":0,"isUserOverlayColor":true,"minHeight":75,"minHeightUnit":"vh","contentPosition":"top left","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-left" style="min-height:75vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_stocksnap_HGLRYTKVWL.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Clients"},"align":"wide","style":{"spacing":{"blockGap":"","padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:paragraph -->
<p><?php esc_html_e('Companies mentored by Ben Oatts and his team of experts.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2.5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2.5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_1.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_2.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_3.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_4.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_5.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fafafa","#fafafa"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/wp-brand_6.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Featuring"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_stocksnap_6ZYX4YY4IR.jpg" alt="" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:2rem"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-text-align-left has-contrast-color has-text-color has-link-color"><?php esc_html_e('Navigate life and workplace with creativity and innovation.', 'coachben');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Coaching stands as a cornerstone of paramount significance in the realm of business, exerting a profound influence on the growth and prosperity of not only individuals but also entire organizations.%1$sIts role is pivotal, a driving force that propels individuals and corporate entities toward excellence.', 'coachben' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Here, we delve into the manifold reasons why coaching is an invaluable asset in the business landscape. Each facet illuminates its undeniable value for enterprises of all sizes.', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-primary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.025rem","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-primary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.025rem"><?php esc_html_e('Request information', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coachben_stocksnap_AEENLCARXY.jpg" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Courses and Events"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Courses"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('Courses', 'coachben');?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Stress Management Coaching', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('The present course unlocks your full potential with our intensive, deep-dive course designed to take your skills and knowledge to the next level.', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info - Secondary"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-tertiary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Financial Planning Coaching', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('This certification is ideal for individuals looking to master their chosen field, whether leadership, entrepreneurship, or a specific professional skill.', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info - Secondary"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-tertiary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Life &amp; Business Behavioral Coaching', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Stay ahead in your career with a program designed to provide ongoing learning opportunities and keep your skills relevant in today’s ever-changing.', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info - Secondary"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-tertiary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Events"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:75%"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php esc_html_e('And events', 'coachben');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"metadata":{"name":"Event 1"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Agenda"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-martian-mono-font-family has-small-font-size"><?php esc_html_e('Jul 4, 2025 — 20:00', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-primary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Watch Talk"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"metadata":{"name":"Event wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Coaching Expo 2025', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Explore the latest trends, techniques, and tools transforming the coaching world at the Coaching Expo 2025. This annual event brings together industry leaders, innovative coaches, and aspiring professionals to engage in hands-on workshops, keynote talks, and networking opportunities. Delve into sessions on personal growth, career transformation, and the psychology of achievement.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"metadata":{"name":"Event 2"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Agenda"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-martian-mono-font-family has-small-font-size"><?php esc_html_e('Jul 4, 2025 — 20:00', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-primary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Watch Talk"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"metadata":{"name":"Event wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Forum Sostenibilità Milano 2025', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Join influential leaders and visionaries at the FSMi 2025 to discuss and explore sustainable approaches to coaching, business, and community development. This Italian forum highlights the critical role of coaching in driving sustainable, forward-thinking solutions in diverse industries. Attend thought-provoking sessions and gain insights into responsible, impactful leadership.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"metadata":{"name":"Event 3"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Agenda"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-martian-mono-font-family has-small-font-size"><?php esc_html_e('Jul 4, 2025 — 20:00', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"More info"},"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small","fontFamily":"martian-mono"} -->
<p class="has-primary-color has-text-color has-link-color has-martian-mono-font-family has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"Watch Talk"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"75%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:75%"><!-- wp:group {"metadata":{"name":"Event wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Leading &amp; Coaching I Ben Oatts I TEDNYU', 'coachben');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('TEDNYU presents Ben Oatts in an inspiring talk on “Leading &amp; Coaching.” Oatts, an acclaimed coach and speaker, shares his experiences on effective leadership and the transformational power of coaching. Discover fresh perspectives on mentorship, emotional intelligence, and unlocking potential in both personal and professional spaces.', 'coachben');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"cta","area":"uncategorized","align":"wide"} /-->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"0.5rem","left":"0.5rem"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"%"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-contrast-color has-text-color has-link-color"><?php esc_html_e('Get inspired', 'coachben');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"0%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:0%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"0%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:0%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Blog posts"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":14,"query":{"perPage":"4","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"1px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"metadata":{"name":"Title and meta"},"style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-date {"format":"M j, Y"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"metadata":{"name":"More info"},"align":"wide","style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.05rem"><?php esc_html_e('›', 'coachben');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"content":"More Blog Posts"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->