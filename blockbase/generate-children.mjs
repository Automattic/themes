import { promises as fs } from 'fs';
import deepmerge from 'deepmerge';
import { dirname } from 'path';
import { fileURLToPath } from 'url';

const localpath = dirname( fileURLToPath( import.meta.url ) );

(async function start() {
	let args = process.argv.slice(2);
	return await generateChildren();
})();

async function getPackageJson( directory ) {
    const packageJsonString = await fs.readFile( directory + '/package.json', 'utf8' );
    return JSON.parse( packageJsonString );
}

async function generateChildren() {
	const children = [
		{
			"name": 'Geologist',
			"description": "Geologist is a streamlined theme for modern bloggers. It consists of a simple single column of posts, paired with a sophisticated color palette and beautiful sans-serif typography.",
			"slug": 'geologist'
		},
		{
			"name": 'Mayland (Blocks)',
			"description": "Make your online portfolio wonderfully uncluttered with Mayland. Gracefully highlight your photography and other projects. Mayland is versatile enough to be your personal site too.",
			"slug": 'mayland-blocks'
		},
		{
			"name": 'Quadrat',
			"description": "Quadrat is a simple, versatile WordPress theme, designed for blogs and podcasts. Inspired by squared shapes and colourful, minimalist flat illustrations, Quadrat bundles a set of images you can use on your site with the theme’s default color palette. Quadrat’s default styles are bold and playful, relying on a simple sans-serif font and a strong color scheme that you can customize.",
			"slug": 'quadrat'
		},
		{
			"name": 'Seedlet (Blocks)',
			"description": "A simple, text-driven, single-column block-based theme.",
			"slug": 'seedlet-blocks'
		},
		{
			"name": 'Skatepark',
			"description": "Skatepark is a bold and exciting WordPress theme designed for modern events and organizations. With its simple but vivid color default scheme, duotone support, and playful grid, Skatepark is a theme designed for work and play. Customize its colors or try out different font pairings to create your own unique look and feel.",
			"slug": 'skatepark'
		},
		{
			"name": 'Videomaker',
			"description": "Videomaker is a free, minimalistic WordPress theme ideal for film directors and video creators.",
			"slug": 'videomaker'
		},
		{
			"name": 'Zoologist',
			"description": "Zoologist is a simple blogging theme that supports full-site editing.",
			"slug": 'zoologist'
		}
	];

	const packageJson = await getPackageJson( '.' );
	children.forEach( async childTheme => {
		const themeDir = '../' + childTheme.slug;
		const newPackageJson = {};
		newPackageJson.name = childTheme.slug;
		newPackageJson.description = childTheme.description;
		newPackageJson.bugs = packageJson.bugs;
		newPackageJson.bugs.url = packageJson.bugs.url.replace( 'Blockbase', childTheme.name );
		newPackageJson.homepage = packageJson.homepage.replace( packageJson.name, childTheme.slug );
		const themePackageJson = await getPackageJson( themeDir );
		newPackageJson.version = themePackageJson.version;
		const combinedPackageJson = Object.assign( {}, packageJson, newPackageJson );

		const result = await fs.writeFile( themeDir + '/package.json', JSON.stringify( combinedPackageJson, null, 2 ) )
		console.log( childTheme.name + ' updated' );
	} );
}
