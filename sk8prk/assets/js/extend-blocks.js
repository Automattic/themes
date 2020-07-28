/* global wp */
( function( blocks, domReady ) {
    var styles = [
        {
            name: "core/group",
            options: {
                name: "outline",
                label: "Outline",
            },
        },
        {
            name: "core/cover",
            options: {
                name: "duotone",
                label: "Duotone",
            },
        },
        {
            name: "core/gallery",
            options: {
                name: "duotone",
                label: "Duotone",
            },
        },
        {
            name: "core/image",
            options: {
                name: "duotone",
                label: "Duotone",
            },
        },
        {
            name: "core/latest-posts",
            options: {
                name: "duotone",
                label: "Duotone",
            },
        },
        {
            name: "core/paragraph",
            options: {
                name: "border-top",
                label: "Border Top",
            },
        },
        {
            name: "core/media-text",
            options: {
                name: "duotone",
                label: "Duotone",
            },
        },
        {
            name: "core/heading",
            options: {
                name: "border-top",
                label: "Border Top",
            },
        },
        {
            name: "core/paragraph",
            options: {
                name: "text-indent",
                label: "Indent",
            },
        },
    ];
    
    domReady( function() {
        styles.forEach ( function(style){
            blocks.registerBlockStyle( style.name, style.options );
        });

        blocks.unregisterBlockStyle( 'core/pullquote', 'solid-color' );
    });
}( wp.blocks, wp.domReady ) );