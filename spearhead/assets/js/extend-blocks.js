/* global wp */
( function( blocks, domReady ) {
    var styles = [
        {
            name: "core/group",
            options: {
                name: "test",
                label: "Test",
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