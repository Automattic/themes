/**
 * So that any child theme is not REQUIRED to define all of the "custom" values expressed in this parent theme
 * this utility generates the SAME global variables that Gutenberg will produce and ships that CSS with the theme.
 * In this way a child theme will have the same "default starting place" that this theme expresses.
 * 
 * This will no longer be needed with a child theme can extend a parent's theme.json.
 */

import theme from '../experimental-theme.json';
import fs from 'fs';

const note = `
/**
 *	These Variables are provided as the DEFAULT CSS variables that will be constructed based on theme.json custom value.
 *  They are provided here so that child themes are not required to provide ALL of the "custom" values provided by the parent theme.
 *  This can be eliminated when child themes are able to extend parent theme.json files. 
 */
`;

const filePath = new URL('../assets/generatedDefaultVariables.css', import.meta.url);
const custom = theme?.settings?.defaults?.custom || {};

const camelToKebab = (string)=>{
	return string.replace(/([a-z0-9])([A-Z])/g, '$1-$2').toLowerCase();
}

const renderCssVariables = (item, prefix) => {
	const items = Object.entries(item);

	const reduction = items.reduce((collection, [key, value])=>{
		const cssKey = `${prefix}--${camelToKebab(key)}`;
		if('object' === typeof value) {
			collection = collection.concat(renderCssVariables(value, cssKey));
		} else {
			collection.push(`${cssKey}: ${value};`);
		}
		return collection;
	}, []);

	return reduction;
};

const cssVariables = renderCssVariables(custom, '--wp--custom');

fs.writeFileSync(filePath, note + `:root {\n${cssVariables.join('\n')}\n}`);

console.log('Default CSS Variables Generated');