const postcssFocusWithin = require('postcss-focus-within');
const postcssCustomMedia = require('postcss-custom-media');

module.exports = {
	plugins: {
		autoprefixer: {}
	}
};

module.exports = {
	plugins: [
		postcssFocusWithin(/* pluginOptions */)
	]
};

module.exports = {
	plugins: [
		postcssCustomMedia(/* pluginOptions */)
	]
}
