const postcssFocusWithin = require('postcss-focus-within');
const postcssCustomProperties = require('postcss-custom-properties');

module.exports = {
    plugins: {
        autoprefixer: {}
    }
};

module.exports = {
    plugins: [
        postcssFocusWithin(/* pluginOptions */),
        postcssCustomProperties( /* pluginOptions */ )
    ]
};
