/**
 * Block Editor filters
 *
 * Filters the default block settings for various blocks.
 */

function defaultPropModifications( settings, name ) {
    if ( name === 'core/media-text' ) {
        return lodash.assign( {}, settings, {
            attributes: lodash.assign( {}, settings.attributes, {
                align: lodash.assign( {}, settings.attributes.align, {
                    default: 'wide',
                } ),
            } ),
        } );
    }

    return settings;
}

wp.hooks.addFilter(
    'blocks.registerBlockType',
    'professional2019/block-modifications',
    defaultPropModifications
);