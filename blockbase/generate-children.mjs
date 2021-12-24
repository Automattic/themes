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
	const children = [ {
		"name": 'Skatepark',
		"description": "Skatepark is a bold and exciting WordPress theme designed for modern events and organizations. With its simple but vivid color default scheme, duotone support, and playful grid, Skatepark is a theme designed for work and play. Customize its colors or try out different font pairings to create your own unique look and feel.",
		"slug": 'skatepark',
		"version": '1.0.26'
	} ];

	const packageJson = await getPackageJson( '.' );
	children.forEach( childTheme => {
		childTheme.bugs = packageJson.bugs;
		childTheme.bugs.url = packageJson.bugs.url.replace( 'Blockbase', childTheme.name );
		childTheme.homepage = packageJson.homepage.replace( packageJson.name, childTheme.slug );
		const newPackageJson = Object.assign( {}, packageJson, childTheme );
		console.log( newPackageJson );
	} );
}
