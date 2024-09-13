<?php
/**
 * Title: Recipe card with video
 * Slug: bain-marie/recipe-card-with-video
 * Categories: featured
 * Inserter: yes
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"name":"Recipe card with video"},"style":{"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:2rem;margin-bottom:2rem"><!-- wp:post-featured-image {"lock":{"move":true,"remove":true}} /-->

<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"Recipe Content"},"style":{"spacing":{"padding":{"right":"1.8em","left":"1.8em","top":"1.8em","bottom":"1.8em"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:1.8em;padding-right:1.8em;padding-bottom:1.8em;padding-left:1.8em"><!-- wp:post-title {"lock":{"move":true,"remove":true}} /-->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Recipe Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:italic;font-weight:300">Recipe by</p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"style":{"typography":{"fontStyle":"italic","fontWeight":"500"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Category, Difficulty"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">·</h6>
<!-- /wp:heading -->

<!-- wp:heading {"level":6,"lock":{"move":false,"remove":false}} -->
<h6 class="wp-block-heading">Beginner</h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"metadata":{"name":"Details"},"style":{"spacing":{"padding":{"top":"1.6rem","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"#00000029","style":"dashed","width":"1px"}}}} -->
<div class="wp-block-columns" style="border-top-color:#00000029;border-top-style:dashed;border-top-width:1px;padding-top:1.6rem;padding-bottom:var(--wp--preset--spacing--10)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fixed","flexSize":"25%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":313,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://y2kblog.mystagingwebsite.com/wp-content/uploads/2024/05/servings-icon-1.png" alt="" class="wp-image-313" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center">Servings</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">2 servings</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fixed","flexSize":"25%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":314,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://y2kblog.mystagingwebsite.com/wp-content/uploads/2024/05/preptime-icon-1.png" alt="" class="wp-image-314" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center">Prep time</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">10 mins</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fixed","flexSize":"25%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":315,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://y2kblog.mystagingwebsite.com/wp-content/uploads/2024/05/cookingtime-icon-1.png" alt="" class="wp-image-315" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center">Cooking time</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">—</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fixed","flexSize":"25%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":316,"width":"30px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="https://y2kblog.mystagingwebsite.com/wp-content/uploads/2024/05/calories-icon-1.png" alt="" class="wp-image-316" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center">Calories</h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">250/300 kcal</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"lock":{"move":true,"remove":true},"metadata":{"name":"About the recipe"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"lock":{"move":true,"remove":true}} -->
<p>These healthy fruit bowls make a nutritious breakfast, snack, or even a light dessert option. You can prepare the fruit bowls in advance and store them covered in the refrigerator for up to a day. However, it's best to add the banana slices just before serving to prevent them from browning. Experiment with different toppings such as granola, dried fruits, or a drizzle of almond butter for added variety and flavor. Enjoy them any time of day for a refreshing and satisfying treat!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Ingredients"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Ingredients</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>1 cup mixed berries (such as strawberries, blueberries, raspberries)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1/2 cup unsweetened coconut flakes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1/4 cup mixed nuts (such as almonds, walnuts, pecans), chopped</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 ripe banana, sliced</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1/4 cup Greek yogurt (optional)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 tablespoon honey or maple syrup (optional)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Fresh mint leaves for garnish (optional)</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Directions"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Directions</h2>
<!-- /wp:heading -->

<!-- wp:list {"ordered":true} -->
<ol><!-- wp:list-item -->
<li><strong>Prepare the Fruit:</strong> Wash the berries thoroughly under cold water and pat them dry with a paper towel. If using strawberries, remove the stems and slice them into halves or quarters.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Assemble the Bowls:</strong> Divide the mixed berries evenly between two serving bowls. Arrange the sliced banana on top of the berries.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Add Coconut and Nuts:</strong> Sprinkle the unsweetened coconut flakes and chopped mixed nuts over the fruit in each bowl, distributing them evenly.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Optional Yogurt Drizzle:</strong> If desired, add a dollop of Greek yogurt on top of each fruit bowl. Drizzle with honey or maple syrup for a touch of sweetness.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><strong>Garnish and Serve:</strong> Garnish the fruit bowls with fresh mint leaves for a burst of freshness and color. Serve immediately and enjoy!</li>
<!-- /wp:list-item --></ol>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":true,"remove":false},"metadata":{"name":"Recipe Video"},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">Recipe Video</h2>
<!-- /wp:heading -->

<!-- wp:video {"id":416} -->
<figure class="wp-block-video"><video controls src="https://y2kblog.mystagingwebsite.com/wp-content/uploads/2024/05/foodblog-video-2.mp4"></video></figure>
<!-- /wp:video --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"metadata":{"name":"Notes"},"style":{"border":{"bottom":{"color":"#00000029","style":"dashed","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:#00000029;border-bottom-style:dashed;border-bottom-width:1px"><!-- wp:heading -->
<h2 class="wp-block-heading">Notes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Feel free to customize these fruit bowls with your favorite fruits and nuts. Kiwi slices, mango chunks, or pineapple tidbits would make excellent additions. To make this recipe vegan-friendly, omit the Greek yogurt or use a dairy-free alternative such as coconut yogurt. For added protein and fiber, consider sprinkling chia seeds or flaxseeds over the fruit bowls.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":false,"lock":{"move":true,"remove":false},"metadata":{"name":"Share"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading">Share this recipe:</h6>
<!-- /wp:heading -->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","size":"has-small-icon-size","iconBackgroundColor":"primary","iconBackgroundColorValue":"#000000","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<ul class="wp-block-jetpack-sharing-buttons has-small-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:jetpack/sharing-button {"service":"pinterest","label":"Pinterest"} /-->

<!-- wp:jetpack/sharing-button {"service":"facebook","label":"Facebook"} /-->

<!-- wp:jetpack/sharing-button {"service":"x","label":"X"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->