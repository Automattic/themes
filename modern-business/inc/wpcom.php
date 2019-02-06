<?php

// Our filter callback function
function modern_business_primary_color_hue() {
    // Hue
    return 330;
}
add_filter( 'twentynineteen_default_hue', 'modern_business_primary_color_hue' );

// Our filter callback function
function modern_business_primary_color_saturation() {
    // Saturation
    return 53;
}
add_filter( 'twentynineteen_default_saturation', 'modern_business_primary_color_saturation' );

// Our filter callback function
function modern_business_primary_color_lightness() {
    // Lightness
    return 50;
}
add_filter( 'twentynineteen_default_lightness', 'modern_business_primary_color_lightness' );
